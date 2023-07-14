//Confirm exit when making or changing reservation or other settings
window.onbeforeunload = function(){
    return 'Let op! Als u nu deze pagina verlaat raakt u mogelijk de door u ingevulde gegevens kwijt. Weet u het zeker dat u de pagina wilt verlaten?';
};