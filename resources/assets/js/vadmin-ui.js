$('.btnClose').click(function(){
    // $(this).parent().addClass('Hidden');
    $(this).parent().hide();
});

var searchFilters = $('#SearchFilters');
searchFilters.hide();

$('#SearchFiltersBtn').on('click', function(){
    searchFilters.toggle(100);
});

$('.Disabled-Input-Modificable').click(function(){
    $(this).addClass('disabled-input-modificable-on');
});

