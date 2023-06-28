(function ($, Drupal, drupalSettings, once) {
  Drupal.behaviors.mtTeamMembersMasonry = {
    attach: function (context, settings) {

      //Masonry Layout Style 2
      once('mtTeamMembersMasonryInit', ".team-members-masonry-container", context).forEach(function(item) {
        var $this = $(item);
        $this.fadeIn("slow");

        // load images first
        $this.imagesLoaded(function() {
          var blockId = $this.closest(".block").attr('id'),
          masonryItem = "#" + blockId + " .masonry-grid-item";
          $this.isotope({
            itemSelector: masonryItem,
            layoutMode: "masonry"
          });
          $this.isotope("layout");
        });

        // initialise inside bootstrap tab
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          $this.isotope('layout');
        });
      });

    }
  };
})(jQuery, Drupal, drupalSettings, once);
