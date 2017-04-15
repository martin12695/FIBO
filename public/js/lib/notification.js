$(document).ready(function(){

    function getCurrentPageURL() {
        $pageURL = $(location).attr('href');
        return $pageURL;
    }
    function auto_load(){
        $.ajax({
            url: getCurrentPageURL(),
            cache: false,
            success: function(data){
                $("body").html(data);
            }
        });
    }
    $('a.jsHeaderPointerMenuNotificationsToggle').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-headerV2__actions__item');
        if($parent.find('.jsNotificationsPopdown').hasClass('active')){
            $parent.find('.jsNotificationsPopdown').show();
            $parent.find('.jsNotificationsPopdown').removeClass('active');
        }
        $('a.jsHeaderPointerMenuNotificationsToggle').on('click',function (e) {
            e.preventDefault();
            if(!$parent.find('.jsNotificationsPopdown').hasClass('active')){
                $parent.find('.jsNotificationsPopdown').hide();
                $parent.find('.jsNotificationsPopdown').addClass('active');
            }
            auto_load();
        })
    });
})