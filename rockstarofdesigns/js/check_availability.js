function check_empty() {
  if (document.myform.txtDomainName.value == "") {
    var check_err = document.getElementById('errortag');
    check_err.style.display = 'block';
    return false;
  }
  else {
    document.myform.action = "/domain.php?action=check_availability&goto=metarefresh&formaction=domain.php";
    document.myform.submit();
  }
}

function calculate_total(obj, promo_period, promo_price) {

  var ref_id = document.getElementById(obj.name + '_id');
  var promo_ref_id = document.getElementById(obj.name + '_promo_id');
  var value = obj.value;
  var year_price = value.split("_", 2);
  var total = 0;
  var dom_year = parseInt(year_price[0]);
  var dom_price = get_unformatted_price(year_price[1]);
  if (dom_year < promo_period)
    total = dom_year * promo_price;
  else {
    var sub_total = Math.round(((dom_year - promo_period) * dom_price) * 100) / 100;
    total = (promo_period * promo_price) + sub_total;
  }
  actual_total = dom_year * dom_price;
  total = actual_total < total ? actual_total : total;
  ref_id.innerHTML = round_decimals(total, 2);
  if (promo_price != 0) {
    promo_ref_id.innerHTML = round_decimals(total, 2); //Sets promo price
    ref_id.innerHTML = round_decimals((dom_year * dom_price), 2);
  }
  return total;
}
function show_select_box(obj) {
  if (obj.checked)
    document.getElementById(obj.value + '_select_id').style.display = 'block';
  else
    document.getElementById(obj.value + '_select_id').style.display = 'block';
}

function change_years() {
  var chkbox_len = document.getElementsByName('domainnamearr[]').length; //No. of checkboxes displayed on page
  for (i = 0; i < chkbox_len; i++) {
    select_box = document.getElementsByName('domainnamearr[]')[i].value; //domain name
    len = document.getElementsByName(select_box)[0].getElementsByTagName("option").length; //No. of values in dropdown
    year = arguments[0]; //1st argument (1)
    document.getElementsByName(select_box)[0].getElementsByTagName("option")[year - 1].selected = true;
    for (j = 0; j < len; j++) {
      if (document.getElementsByName(select_box)[0].getElementsByTagName("option")[j].selected) {
        var promo_price = document.getElementById(select_box + '_promo_price').innerHTML;
        var promo_period = document.getElementById(select_box + '_promo_period').innerHTML;
        calculate_total(document.getElementsByName(select_box)[0], promo_period, promo_price);
        break;
      }
    }
  }
}

function change_total() {
    var domains_in_cart = [];
  var chkbox_len = document.getElementsByName('domainnamearr[]').length;
  var grand_total = 0;
  for (i = 0; i < chkbox_len; i++) {
    if (document.getElementsByName('domainnamearr[]')[i].checked) {
      select_box = document.getElementsByName('domainnamearr[]')[i].value;
      len = document.getElementsByName(select_box)[0].getElementsByTagName("option").length;

      for (j = 0; j < len; j++) {
        if (document.getElementsByName(select_box)[0].getElementsByTagName("option")[j].selected) {
          var promo_price = document.getElementById(select_box + '_promo_price').innerHTML;
          var promo_period = document.getElementById(select_box + '_promo_period').innerHTML;
          domains_in_cart.push(build_cart_items_stack(document.getElementsByName(select_box)[0], promo_period, promo_price));
          grand_total += calculate_total(document.getElementsByName(select_box)[0], promo_period, promo_price);
          break;
        }
      }
    }
  }
    add_discount_to_cart(domains_in_cart);
  $('#page_total').text(format_currency(grand_total));
  populate_hosting_modal_select_domain();
}

function build_cart_items_stack(obj, promo_period, promo_price){
    var value = obj.value;
    var year_price = value.split("_", 2);
    var dom_year = parseInt(year_price[0]);
    var dom_price = get_unformatted_price(year_price[1]);
    var premium_status = $('#' + escapeStr(obj.name) + '_div').parents('#premiumDomainResults').length == 1;
    return {'domain_name': obj.name, 'period': dom_year, 'price': dom_price, 'promo_period' : promo_period, 'promo_price' : promo_price, 'premium' : premium_status};
}

function add_discount_to_cart(cart_items) {
    if(cart_items.length > 0) {
        $('#total_curr').css({'text-decoration': 'none', 'color': '#6fc61e', 'font-size': '34px'});
        $('.discounted_price').hide();
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {'cart_items': cart_items},
            url: "/content.php?action=get_dca_discount",
            success: function(result) {
                if(result) {
                    $('#total_curr').css({'text-decoration': 'line-through', 'color': '#708090', 'font-size': '24px'});
                    $('#discounted_page_total').html(result['discounted_total']);
                    $('.discounted_price').show();
                }
            }
        });
    }
}

function populate_hosting_modal_select_domain() {
  var options = '';
  $("input[name=domainnamearr[]]:checked").not('input[name=server_location]').each(function() {
    options += '<option value="' + $(this).val() + '">' + $(this).val() + '</option>';
  });
  $("#upsell_select_domain_id").empty().append(options);
  $("#upsell_select_domain_id option:first").attr('selected', 'selected');
  populate_domain_for_selected_product();
}

function only_tel_tld_checked() {
  var chkbox_len = document.getElementsByName('domainnamearr[]').length;
  var count = 0;
  var domainName;
  for (i = 0; i < chkbox_len; i++) {
    if (document.getElementsByName('domainnamearr[]')[i].checked) {
      count++;
      domainName = document.getElementsByName('domainnamearr[]')[i].value;
    }
  }
  if (count == 1 && domainName.split('.')[1] == 'tel') {
    return true;
  }
  return false;
}


function proceed_to_buy(butt) {
  _gaq.push(['s2._trackEvent', 'Checkout', $('#page_total').html(), 'customer']);
  var chkbox_len = document.getElementsByName('domainnamearr[]').length;
  flag = false;
  for (i = 0; i < chkbox_len; i++) {
    if (document.getElementsByName('domainnamearr[]')[i].checked) {
      flag = true;
      break;
    }
  }
  if (flag == false) {
    $('#chk_selected_error').show();
    /*window.scrollTo(-100,-1000);*/
    return false;
  }
  else {
    //tempbutton=butt;
    //document.myform.action.value = "add_domain_registration";
    //document.myform.submit();
    return true;
  }
}

function if_show_hosting_blurd_with_free_hosting(offer_free_hosting) {
  if(offer_free_hosting == 'false')
    return true;
  var chkbox_len = document.getElementsByName('domainnamearr[]').length;
  var other_domains = false;
  for (i = 0; i < chkbox_len; i++) {
    var domain = document.getElementsByName('domainnamearr[]')[i];
    if ($(domain).is(":checked") && !(/\.net$/.test($(domain).val()))) {
      other_domains = true;
      break;
    }
  }
  return other_domains
}

function call_check_availability() {
  //document.myform.showrelated.value = "true";
  document.myform.action.value = "check_availability";
  window.location = "/domain.php";
}

function calculate_price_per_year(price, period, promo_price, promo_period) {
  if (promo_price > price) {
    return price;
  }
  else if (period <= promo_period) {
    return promo_price;
  }
  return (promo_period * promo_price + (period - promo_period) * price) / period;
}

function show_savings(year_select) {
  var prices = new Array();
  var max_price = parseFloat($(year_select).parent().siblings("div[id$='_max_price']").html());
  var promo_price = $(year_select).parent().siblings("div[id$='_promo_price']").html();
  var promo_period = $(year_select).parent().siblings("div[id$='_promo_period']").html();
  promo_price = (promo_price == '') ? 0 : parseFloat(promo_price);
  promo_period = (promo_period == '') ? 0 : parseInt(promo_period);

  $(year_select).children("option").each(function() {
    var value = $(this).attr("value");
    var period = parseInt(value.split("_")[0]);
    var price = parseFloat(get_unformatted_price(value.split("_")[1]));
    prices[period] = calculate_price_per_year(price, period, promo_price, promo_period);
  });

  var saving = max_price - prices[$(year_select).find("option:selected").attr("value").split("_")[0]];
  $(year_select).parent().find(".saving").remove();
  var saving_percent = Math.round(saving / max_price * 10000) / 100;
  if (saving_percent > 0) {
    $(year_select).after('<span class="saving">' + get_translated_message('domains_yousave') + ' ' + round_decimals(saving_percent, 2) + '%</span>');
  }
}
$(document).keydown(function(event){
    if(event.which == 27){
      closeModal();
    }
});


$(document).ready(function() {

  $('.total_price').hide();
  $('.sale_price').hide();
  $('.includedFree p.quickSummary a').click(function() {
    $(this).parent().parent().removeClass('hideIncludedFree').addClass('showIncludedFree');
    return false;
  });
  $('.includedFree li.showmore a').click(function() {
    $(this).parent().parent().parent().removeClass('hideIncludedFree').addClass('showIncludedFree');
    return false;
  });

  $('.includedFree li.showless a').click(function() {
    $(this).parent().parent().parent().removeClass('showIncludedFree').addClass('hideIncludedFree');
    return false;
  });


  $(".year_select").change(function() {
    show_savings(this);
    _gaq.push(['s2._trackEvent', 'Domain-Duration-Change', $(this).val()]);
  });

  $(".year_select").each(function() {
    show_savings(this);
  });

  $("select[name='duration']").change(function() {
    _gaq.push(['s2._trackEvent', 'Duration-Change', $(this).val()]);
  });

  change_total();
});


function proceed_to_cart() {
  $('#myform').submit();
}

function proceed_to_cart() {
  modalChoiceAnalytics('skip');
  $('#myform').submit();

}

function buy_web_hosting() {
  $('#myform input[name="upsell"]').val("web-hosting/linux-php-hosting.php");
  modalChoiceAnalytics('webHosting');
  proceed_to_cart();
}

function buy_email_hosting() {
  $('#myform input[name="upsell"]').val("web-hosting/email-hosting.php");
  modalChoiceAnalytics('emailHosting');
  proceed_to_cart();
}

function buy_site_builder() {
  $('#myform input[name="upsell"]').val("website-design/index.php");
  modalChoiceAnalytics('siteBuilder');
  proceed_to_cart();
}

function add_to_cart(product_type, planid) {
  $('#myform input[name="upsell_modal_product_type"]').val(product_type);
  $('#myform input[name="upsell_modal_planid"]').val(planid);
  $('#myform input[name="location"]').val($('input[name="server_location"]').val().toLowerCase());
  $('#myform input[name="upsell_duration"]').val($('#' + planid + '_duration').val());
    if($("input[name=domainnamearr[]]:checked").length == 1)
      {
          populate_domain_for_selected_product();
          $('#myform').submit();
          return false;
      }
  closeModal();
  showModal("upsell_modal_select_domain");
}

function modalChoiceAnalytics(product) {
  //track event on which button users select on upsel modal
  _gaq.push(['s2._trackPageview', '/upsellModal/' + product ]);
}
function populate_domain_for_selected_product() {
  var upsell_modal_domain_names = new Array();
  $("#upsell_select_domain_id option:selected").each(function() {
    upsell_modal_domain_names.push($(this).val());
  });
  $("input[name=upsell_modal_domain_names]").val($.map(upsell_modal_domain_names, function(val) {
    return "" + val + "";
  }));
}

function handleError(domain_name){
    var element = document.getElementById(domain_name+"_status"),
        select_elem = document.getElementById(domain_name+"_select");
    $(select_elem).attr("disabled","disabled");
    $(element).removeClass('ajaxSpinner');
    $(element).addClass('ajaxerror');
    $(element).html(get_translated_message('domains_tryagain'));
}

function check_availability(domain_name, idn_language){
    var data_str = "action=caajax&domain_name=" + domain_name;
    if(idn_language !== undefined)
    {
        data_str += '&idn_language='+idn_language+'&idn=true';
    }
    $.ajax({
        type: "GET",
        dataType: "json",
        data: data_str,
        url: "domain.php",
        beforeSend: function() {
        },
        success: function(result) {
            if (!result || !(result['status']) || (result['status'] == "error")) {
                handleError(domain_name);
                return;
            }

            var element = document.getElementById(domain_name+"_status");
            $(element).removeClass('ajaxSpinner');
            $(element).addClass('ajaxText ui-button-grn');
            if (result['status'] == 'available') {
                if(result.hasOwnProperty('is_premium'))
                {
                    var primary_domain = document.getElementById(domain_name + "_status");
                    var premium_domain_div = document.getElementById(domain_name + "_premiumDomain");
                    $(primary_domain).parent().parent().parent().remove();
                    $(premium_domain_div).show();
                    element = document.getElementById("premium_"+domain_name + "_status");
                    //thisBtn = $(element).parents('.premium').children('.new-ui-button');
                    //thisBtn = $(element).children('.new-ui-button');
                    //thisBtn.removeClass('new-ui-button');
                    $(element).addClass('ajaxText ui-button-grn');
                }

                var div_element = document.getElementById(domain_name+"_div");
                $(div_element).show();
                $(element).html(get_translated_message('domains_add'));
                var checkbox = document.getElementById(domain_name+"_cbox_prim");				
                $(checkbox).show();				
           
                var details_div = document.getElementById(domain_name+"_details");								
                $(details_div).show();
                if (result.hasOwnProperty('promo_price'))
                    domainname_price = result['promo_price'];
                else
                    domainname_price = result['price'];
                if(result.hasOwnProperty('is_premium'))
                {
                    sub_func_make_html_object_and_display_for_premium_domain(premium_domain_div, domain_name, domainname_price)
                    //thisBtn.bind('click', btn_function);
                }

                // handling for pre ga tlds
                if(typeof result['is_pre_ga_tld'] != 'undefined')
                {
                    var landrush_available = document.getElementById(domain_name+"_landrush_available");
                    $(landrush_available).val(result['landrush']);
                    var pre_ga_available = document.getElementById(domain_name+"_pre_ga_available");
                    $(pre_ga_available).val(result['pre_ga']);
                    if(result['classkey'].match(/^landrush/))
                    {
                        var select_domain_name = domain_name.replace(/\./gi,'\\.')
                        $("#"+select_domain_name+"_select > option").each(function(index){
                                    this.value = result['option_value'][index];
                                    this.text = this.text.replace(result['price'][index],result['landrush_price'][index]);
                        });
                        $(".landrush").show();
                    }
                    else
                        $(".prega").show();
                }
                change_total();

            } else {
                $(element).html(get_translated_message('domains_taken'));
                $(element).addClass('ui-button-gray');
                $(element).removeClass('ui-button-grn');				
                $(element).parent().parent().addClass("unavailableDomain");
                var select_elem = document.getElementById(domain_name+"_select");
                $(select_elem).attr("disabled","disabled");
                var sale_span = document.getElementById(domain_name+"_sale");
                $(sale_span).hide();
                var checkbox = document.getElementById(domain_name+"_cbox_prim");
                $(checkbox).show();
                $(checkbox).attr("disabled", "disabled");
            }

            if(typeof result['upsell'] !== 'undefined'){
                var upsell_div = document.getElementById(result['upsell'].main_domain +'.'+ result['upsell'].upsell_tld + '_div');
                if(!$(upsell_div).is(':visible')){
                    upsell_div = $(upsell_div).clone();
                    var upsell_div_id = result['upsell'].upsell_domain + '.' + result['upsell'].upsell_tld + '_upselldiv';
                    $(upsell_div).attr('id',upsell_div_id);
                    if(!$(document.getElementById(upsell_div_id)).is(':visible')){
                        if(result['upsell'].upsell_position == 'suggestion_results'){
                                $('.selectFromRecommended').after($(upsell_div));
                                if(typeof result['upsell'].upsell_msg != 'undefined'){
                                    var landrushhtml = '<div class="landrush" style="margin-top:5px;"><span>' +result['upsell'].upsell_msg+ '&nbsp;<a href="/content.php?action=faq&requestfor='+result['upsell'].upsell_tld+'#landrush_faq" target="_blank">'+result['upsell'].upsell_faqmsg+'</a></span></div>';
                                    $(upsell_div).find('div.domain-wrapper').append(landrushhtml);
                                }
                                $(upsell_div).show();
                        } else if(result['upsell'].upsell_position == 'primary_search'){
                            $('#primaryDomainResults').append($(upsell_div));
                            $(upsell_div).find('div.domain-wrapper').wrap('<div class="dname-wrp availableDomain" />');
                            $(upsell_div).find('div.dname-wrp').append($(upsell_div).find('p'));
                            $(upsell_div).find('p').css('left','384px');
                            if(typeof result['upsell'].upsell_msg != 'undefined'){
                                var landrushhtml = '<div class="landrush"><span>' +result['upsell'].upsell_msg+ '</span>&nbsp;<a href="/content.php?action=faq&requestfor='+result['upsell'].upsell_tld+'#landrush_faq" target="_blank">'+result['upsell'].upsell_faqmsg+'</a></div>';
                                $(upsell_div).find('div.dname-wrp').append(landrushhtml);
                                $(upsell_div).append('<span class="new-chck-avail"><strong>NEW</strong></span>');
                            }
                            $('#primaryDomainResults div.last').removeClass('last').removeClass('singleResult');
                            $(upsell_div).addClass('last');
                            $(upsell_div).show();
                        }
                    }
                }
            }
        },
        complete: function() {
            if(domain_count == 1){
                $("#primaryDomain").find("input").hide();
                $("#primaryDomain").addClass("singleResult");
                $("#main_heading").text(get_translated_message('domains_searcheddomainresult'));
            }
        },
        error: function() {
            handleError(domain_name);
        }
    });
}

function check_alternate_availability(){
    $.ajax({
        type: "GET",
        dataType: "json",
        data: "action=suggested_names_check_availability",
        url: "domain.php",
        beforeSend: function() {
        },
        success: function(result) {
            $("#suggested_domains_spinner").hide();
            if (result && result['status'] && result['status'] == 'success'){
              if(result['domains'] && result['domains'].length > 0) {

                  if (result['domains'].length > 3) {
                      $("#remaining-extensions").show();
                      $("#see_more").show();
                  }

                  for(index in result['domains']){
                      if(index >= 3)
                          show_available_alternates(result['domains'][index],$("#more_suggestions_div"));
                      else
                          show_available_alternates(result['domains'][index],$("#suggestions_div"));
                  }


                } else {
                    $("#suggestedDomainResults").hide();
                }
            }
            else{
              show_error_for_name_suggestions();
            }

        },
        complete: function() {
            $("#suggestions_div > div.available:visible:last").addClass("last");
            $("#more_suggestions_div > div.available:last").addClass("last");
        },
        error: function() {
          show_error_for_name_suggestions();
        }
    });
}


function show_error_for_name_suggestions(){
  $("#suggested_domains_spinner").show();
  $("#suggested_domains_spinner").removeClass('ajaxSpinner');
  $("#suggested_domains_spinner").addClass('ajaxerror');
  $("#suggested_domains_spinner").html(get_translated_message('domains_erroroccured'));
}

function make_html_object_and_display(domain_name,tld,append_element){
    var domain = domain_name+"."+tld;
    $("#"+tld+"_pricing").clone().attr("id",domain+"_div").appendTo(append_element);
    element = document.getElementById(domain_name+"."+tld+"_div");

    $(element).show();

    $(element).find("#available_domain_name").html(domain);
    $(element).find("#liEmailAccounts strong").html( get_translated_message('domains_youat') + domain);


    $(element).find("#select_id").attr('name',domain).change(function() {
        show_savings(this);
    });
    $(element).find(".quickSummary a").click(function(e){
      toggle_domain_details(e,this);
    });
    $(element).find("#total_price_id").attr('id',domain+"_id");
    $(element).find("#promo_price_id").attr('id',domain+"_promo_id");
    $(element).find("#promo_price").attr('id',domain+"_promo_price");
    $(element).find("#promo_period").attr('id',domain+"_promo_period");
    $(element).find("#max_price").attr('id',domain+"_max_price");
    $(element).find("#checkbox_id").val(domain);
    $(element).find("#checkbox_id").attr('id',domain+"_cbox");
    $(element).find("#available_domain_name").attr("for",domain+"_cbox");
	$(element).find("#available_domain_name").attr("title",domain);
}


function toggle_domain_details(e,elem){
  e.preventDefault();
  $(elem).parent().parent().toggleClass('hideIncludedFree').toggleClass('showIncludedFree');
  $(elem).toggleText(get_translated_message('domains_less'), get_translated_message('domains_more'));
}
function show_available_alternates(domain_name,append_element){
    domain_name = domain_name.split(".");
    dom_name = domain_name[0];
    if(domain_name.length == 3){
        domain_name[1].concat(domain_name[2]);
    }
    tld = domain_name[1];
    make_html_object_and_display(dom_name,tld,append_element);
}

function see_more_extensions(){
    $.ajax({
        type: "GET",
        dataType: "json",
        data: "action=show_more_extensions",
        url: "domain.php",
        beforeSend: function() {
            $('#secondaryDomainResults > div.available:visible:last').removeClass("last");
            $('#see_more_extensions_spinner').addClass('ajaxSpinner');
            $('#see_more_extensions_spinner').removeClass('ajaxerror');
            $('#see_more_extensions_spinner').html('');
            $('#see_more_extensions_spinner').show();
        },
        success: function(result) {
            if(result['status'] == 'error'){
                $('#see_more_extensions_spinner').removeClass('ajaxSpinner');
                $('#see_more_extensions_spinner').addClass('ajaxerror');
                $('#see_more_extensions_spinner').html(get_translated_message('domains_erroroccured'));
            }
            else{
                $('#see_more_extensions_spinner').hide();
                if(result['status'] == 'no_more_available'){
                    $("#see_more_extensions").hide();
                }
                for(domain_name in result['domains_available']){
                    var div_element = document.getElementById(result['domains_available'][domain_name]+"_div");
                    $(div_element).show();
                }
            }
        },
        complete: function() {
            $('#secondaryDomainResults > div.available:visible:last').addClass("last");
        },
        error: function() {
          $('#see_more_extensions_spinner').removeClass('ajaxSpinner');
          $('#see_more_extensions_spinner').addClass('ajaxerror');
          $('#see_more_extensions_spinner').html(get_translated_message('domains_erroroccured'));
        }
    });
}

function get_secondary_results(idn){
    var data_str = "action=get_secondary_results";
    if(idn)
        data_str += '&idn=true';
    $.ajax({
        type: "GET",
        dataType: "json",
        data: data_str,
        url: "domain.php",
        beforeSend: function() {
        },
        success: function(result) {
            if (!result || !(result['status']) || (result['status'] == "error")) {
                show_error_for_secondary_domains();
                return;
            }
            else{

                $("#secondary_domains_spinner").hide();
                $("#see_more_extensions").show();

                if(result['status'] == 'no_more_available'){
                    $("#see_more_extensions").hide();
                }

                if (result['domains_available'] && result['domains_available'].length > 0) {
                    for(domain_name in result['domains_available']){
                        var div_element = document.getElementById(result['domains_available'][domain_name]+"_div");
                        $(div_element).show();
                        var checkbox = document.getElementById(result['domains_available'][domain_name]+"_cbox_prim");
                        $(checkbox).show();                       
                    }
                    change_total();
                } else {
                    $('#secondaryDomainResults').hide();
                }
                
            }
        },
        complete: function() {
            $('#secondaryDomainResults > div.available:visible:last').addClass("last");
        },
        error: function() {
        }
    });
}

function show_error_for_secondary_domains() {
    $("#secondary_domains_spinner").show();
    $("#secondary_domains_spinner").removeClass('ajaxSpinner');
    $("#secondary_domains_spinner").addClass('ajaxerror');
    $("#secondary_domains_spinner").html(get_translated_message('domains_erroroccured'));
    $("#see_more_extensions").hide();
}

function toggleAvailableCheckboxes(selectAllCheckbox){
    var check_val = $(selectAllCheckbox).attr("checked");
    $("input[name = 'domainnamearr[]']").each(function(index){
        if( $(this).is(':visible') == true && $(this).is(':disabled') == false){
            $(this).attr("checked",check_val);
        }
    });
    change_total();
}

function check_premium_domain_availability() {
    $('#see_more_premium_domains').hide();
    $.ajax({
        type: "GET",
        dataType: "json",
        data: "action=premium_domains",
        url: "domain.php",
        beforeSend: function () {
        },
        success: function (result) {
            $("#premium_domains_spinner").hide();
            if (result && result['status'] && result['status'] == 'success') {
                var index = 1;
                for (domain_name in result['domains']) {
                    if(index <= 3)
                        make_html_object_and_display_for_premium_domain(domain_name, result['domains'][domain_name], false);
                    else if( index <= 10 )
                        make_html_object_and_display_for_premium_domain(domain_name, result['domains'][domain_name], true);
                    else
                        break;
                    index++;
                }
                if(index > 3)
                {
                    $('#see_more_premium_domains').css('display', 'inline');
                    $("#see_more").show();
                }
            }
            else {
                //show_error_for_premium_domain();
            }

        },
        complete: function () {
            $("#premium_div > div.result-wrapper > div.resultDomain-wrapper:visible:last").addClass("last");
            //$('#premium_div .new-ui-button').bind('click', btn_function);
        },
        error: function () {
            //show_error_for_premium_domain();
        }
    });

}
function make_html_object_and_display_for_premium_domain(domain_name, domain_price, is_hidden) {
    var domain = domain_name;
    var d = domain_name.replace('.', '\\.');
    if($("#secondaryDomainResults").find("#"+d + "_div").html() !== undefined);
    $("#"+d + "_div").remove();
    $("#premiumDomain_pricing").clone().attr("id", domain + "_div").appendTo($("#premium_div"));
    element = document.getElementById(domain_name + "_div");
    if(is_hidden) {
        $(element).addClass('hidden-premium-domain');
    } else {
        $(element).show();
    }
    $(element).find("#available_domain_name").html(domain);
    $(element).find("#available_domain_name").attr('title', domain);
    sub_func_make_html_object_and_display_for_premium_domain(element, domain, domain_price);
}

function sub_func_make_html_object_and_display_for_premium_domain(element, domain, domain_price)
{
    $(element).find("#premium_domain_price").html(format_currency(domain_price));
    $(element).find("#premium_domain_search_price").attr('name', domain + "_price");
    $(element).find("#premium_domain_search_price").val(domain_price);
    $(element).find("#total_price_id").attr('id', domain + "_id");
    $(element).find("#promo_price_id").attr('id', domain + "_promo_id");
    $(element).find("#promo_price").attr('id', domain + "_promo_price");
    $(element).find("#promo_period").attr('id', domain + "_promo_period");
    $(element).find("#checkbox_id").val(domain);
    $(element).find('#select_id').attr('name', domain);
    $(element).find('#select_id > option').val('1_' + format_currency(domain_price));
    $(element).find('.new-ui-button').attr('data-id', domain);
    $(element).find('.new-ui-button').addClass('ajaxText ui-button-grn');
    var domain_tld = domain.substring(domain.indexOf('.'));
    $(element).find("#premium_domain_tld").html(domain_tld.toUpperCase());
}
function show_more_premium_domains() {
    $("#premium_div > div.result-wrapper > div.resultDomain-wrapper:visible:last").removeClass("last");
    $('#premium_div').find('.hidden-premium-domain').each(function(){$(this).removeClass('hidden-premium-domain');$(this).css('display','block');})
//    $('#see_more_premium_domains').css('display', 'none');
    $('#see_more_premium_domains').attr('disabled', 'disabled');
    $('#see_more_premium_domains').css('color', 'grey');
    $("#premium_div > div.result-wrapper > div.resultDomain-wrapper:visible:last").addClass("last");
}

$('#remaining-extensions').click(function(e) {
    if($("#remaining-extensions").attr("disabled")=="disabled")
    {
        return false;
    }
    $('#more_suggestions_div').slideToggle(
    function(){
        $("#suggestions_div > div.available:visible:last").toggleClass("last");
        $("#remaining-extensions").attr("disabled","disabled");
        $("#remaining-extensions").css('color', 'grey');;
    }
);

    $("span", this).text($("span", this).text() == get_translated_message('domains_hide') ? get_translated_message('domains_see') : get_translated_message('domains_hide'));
});


