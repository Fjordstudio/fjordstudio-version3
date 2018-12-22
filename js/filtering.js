(function() {

  var $boxes = $('.cases .filtered-list .case-grid > div');
  var $buttons = $('#filter-nav');
  var tagged = {};

  $boxes.each(function() {
    var box = this;
    var tags = $(this).data('tag');

    if (tags) {
      tags.split(',').forEach(function(tagName) {
        if (tagged[tagName] == null) {
          tagged[tagName] = [];
        }
        tagged[tagName].push(box);
      });
    }
  });

  $('<button/>', {
    text: 'Show All',
    class: 'active',
    click: function() {
      $(this)
        .addClass('active')
        .siblings()
        .removeClass('active');
      $boxes.show();
    }
  }).appendTo($buttons);

  $.each(tagged, function(tagName) {
    $('<button/>', {
      text: tagName.replace(/[_-]/g, " ") + ' (' + tagged[tagName].length + ')',
      click: function() {
        $(this)
          .addClass('active')
          .siblings()
          .removeClass('active');
				$boxes.parent(".case-grid").prev().hide();
        $boxes
          .hide()
          .filter(tagged[tagName])
          .show();
				$boxes.filter(tagged[tagName]).parent(".case-grid").prev().show();
      }
    }).appendTo($buttons);
  });

}());