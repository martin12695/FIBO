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

    $('a.edit-link').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field p.message').hide();
        $parent.find('.tw3-field .editForm').show();
        $parent.find('a.cancel').show();
        $('.tw3-field__view').hide();
        $('.tw3-field__editIcon a.edit-link').hide();

    });
    $('a.cancel').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field p.message').show();
        $parent.find('.tw3-field .editForm').hide();
        $parent.find('a.edit-link').show();
        $('.tw3-field__view').show();
        $('.tw3-field__editIcon a.edit-link').show();
        $('.tw3-field__editIcon a.cancel').hide();

    });

})