/*

Jscript:: LandingSiteScript

Updated By: 18/08/2023
Created By: Kayode Shobalaje

Owned By: FundRealEstate

*/
$(function(){
    $(document).on('click','.mobile-menu', function(){
        $(".menu_mobile").slideDown();
    });
    $(document).on('click','.closex', function(){
        $(".menu_mobile").slideUp();
    });
});