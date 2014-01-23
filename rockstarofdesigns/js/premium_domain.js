function change_total() {
    var chkbox_len = document.getElementsByName('domainnamearr[]').length;
    var grand_total = 0;
    for (i = 0; i < chkbox_len; i++) {
        if (document.getElementsByName('domainnamearr[]')[i].checked) {
            select_box = document.getElementsByName('domainnamearr[]')[i].value;
            select_box = select_box.replace('.', '\\.')+"_price";
            grand_total += Number($("input[name="+select_box+"]").val());
        }
    }
    $('#page_total').text(format_currency(grand_total));
}

function check_empty_domain_name()
{
    if($("#domain_keyword").val() == '')
    {
        $("#errortag").show();
        return false;
    }
    return true;
}

$(document).ready(function(){

    $(".txt-on-off").focus(function () {
        $(".has-label .label-on-off").hide();
        $(this).addClass('ison');
    });

    $(".txt-on-off").focusout(function () {
        if (!$(this).val()) {
            $(".has-label .label-on-off").show();
            $(this).removeClass('ison');
        }
    });

    if($('#flt-div').offset() != null)
    {
        var box = $('#flt-div'),
            paddingY = 10.5,
            box_offsetY = (box.offset()).top,
            top = box_offsetY - paddingY;
        $(window).scroll(function() {

            /*$('#more_suggestions_div').css("z-index","521");
             $('#more_suggestions_div div').css("z-index","520");*/

            $('.sidebar').height($('.d-res-col').height() - paddingY);
            var diff_height = ($('.d-res-col').height() - box.height()) + (box_offsetY - 20);
            if($(window).scrollTop() >= top && $(window).scrollTop() < diff_height )
            {
                box.removeClass('scrollbar-bottom').addClass('scrollbar');
            }
            else if($(window).scrollTop() >= diff_height )
            {
                box.removeClass('scrollbar').addClass('scrollbar-bottom');
            }
            else
            {
                box.removeClass('scrollbar scrollbar-bottom');
            }
        });
    }

    $('#select-price').click(function(){
        $('#pre-dname-price').slideToggle(200);
    });
    $(function() {
        $( "#slider-range-min" ).slider({
            range: "min",
            value: 100000,
            min: 100,
            max: 100000,
            slide: function( event, ui ) {
                $("#pre-d-amount" ).val( $('#currency').html() + ui.value );
                $("#seleted-price" ).html( $('#currency').html() + ui.value );
                $("#range").val(ui.value);
            }
        });
        $( "#pre-d-amount" ).val( $('#currency').html() + $( "#slider-range-min" ).slider( "value" ) );
        $("#seleted-price" ).html( $('#currency').html() + $( "#slider-range-min" ).slider( "value" ) );
    });

    $(".ui-button-grn").live({
        click: function() // ui button ka click pe
        {
            if($(this).closest('.domain-wrapper').children('input').is(':checked')) // if it's checked
            {
                $(this).closest('.domain-wrapper').children('input').attr('checked',false);
                $(this).text($('#add').html());
                $(this).css('opacity','1');
                change_total();

                var sel_item = $(this).prev('.item-dname').attr('title');
                $('.cart-item').each(function(){
                    if ($(this).attr('id') == sel_item)
                    {
                        $(this).fadeOut(function(){$(this).remove();});
                        change_total();
                    }
                });

                if( $('#dlist-items li').length < 3)
                {
                    $('#dlist-items .first').slideDown("slow");
                    $('#continue_id').addClass('ui-button-dis');
                    $('#continue_id').removeClass('ui-button');
                    $('#ammout-wrp').hide();
                }
                else
                {
                    $('#dlist-items .first').hide();
                    $('#ammout-wrp').show();
                }

            }
            else															// if it's not checked
            {
                $(this).closest('.domain-wrapper').children('input').attr('checked',true);
                var sel_item = $(this).prev('.item-dname').text();
                $('#dlist-items').append('<li class="cart-item" id="'+sel_item+'"><span class="cart-dname">'+sel_item +'</span><span class="ic-can"></span></li>');
                $('#ammout-wrp').show();
                $(this).text($('#add').html());
                $('#continue_id').removeClass('ui-button-dis');
                $('#continue_id').addClass('ui-button');
                $("#dlist-items > li.first").hide();
                $(this).css('opacity','0.7');
                change_total();
            }
        },
        mouseover: function() // ui button mouse hover
        {
            if($(this).closest('.domain-wrapper').children().is(':checked'))
            {$(this).text($('#remove').html());}
            else
            {$(this).text($('#add').html());}
        },
        mouseout: function() // ui button mouse out
        {
            if($(this).closest('.domain-wrapper').children().is(':checked'))
            {$(this).text($('#added').html());}
            else
            {$(this).text($('#add').html());}
        }
    });

    $('.ic-can').live({ // cart  delete button click
        click: function()
        {
            var selid = $(this).parent('li').attr('id');
            $('.item-dname').each(function(){
                if ($(this).attr('title') == selid)
                {
                    $(this).parent('.domain-wrapper').children('input').attr('checked',false);
                    $(this).next('.ui-button-grn').text($('#add').html());
                    $(this).next('.ui-button-grn').css('opacity','1');
                    change_total();
                }
            });
            $(this).parent().fadeOut(function(){$(this).remove();});

            if( $('#dlist-items li').length < 3)
            {
                $('#dlist-items .first').slideDown("slow");
                $('#continue_id').addClass('ui-button-dis');
                $('#continue_id').removeClass('ui-button');
                $('#ammout-wrp').hide();

            }
            else
            {
                $('#dlist-items .first').hide();
                $('#ammout-wrp').show();
            }

        }
    });
    $("#continue_id").click(function(){
        $("#premium_domains").submit();
    });
});