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
        $parent.find('.tw3-field form.editForm').show();
        $parent.find('a.cancel').show();
        $(this).hide();
    });
    $('a.cancel').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field p.message').show();
        $parent.find('.tw3-field form.editForm').hide();
        $parent.find('a.edit-link').show();
        $(this).hide();
    });

    $('a.edit-link').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field ul.message').hide();
        $parent.find('.tw3-field form.editForm').show();
        $parent.find('a.cancel').show();
        $(this).hide();
    });
    $('a.cancel').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field ul.message').show();
        $parent.find('.tw3-field form.editForm').hide();
        $parent.find('a.edit-link').show();
        $(this).hide();
    });

    $('a.edit-link').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field .tw3-field__view').hide();
        $parent.find('.tw3-field div .editForm').show();
        $parent.find('a.cancel').show();
        $(this).hide();
    });
    $('a.cancel').on('click', function(e){
        e.preventDefault();
        var $parent = $(this).closest('.tw3-editable__block');
        $parent.find('.tw3-field .tw3-field__view').show();
        $parent.find('.tw3-field div .editForm').hide();
        $parent.find('a.edit-link').show();
        $(this).hide();
    });

})