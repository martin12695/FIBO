/**
 * Created by Trung on 04/03/17.
 */
$(document).ready(function(){

    $('.tab-wrapper .tab a').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.tab-wrapper .tab a').removeClass('selected');
        $('.tab-item').removeClass('selected');

        $('.tab-item').hide();

        $(this).addClass('selected');
        $("#"+tab_id).addClass('selected');
        $("#"+tab_id).show();
    })

})