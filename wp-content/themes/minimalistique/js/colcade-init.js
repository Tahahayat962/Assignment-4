"use strict";

(function () {
  if (
    document.getElementsByClassName("minimalistique-colcade-column").length <=
      0 ||
    document.getElementsByClassName("all-blog-articles").length <= 0 ||
    document.getElementsByClassName("blogposts-list").length <= 0
  ) {
    return;
  }

  var minimalistique_theme_colcade = new Colcade(
    ".add-blog-to-sidebar .all-blog-articles",
    {
      columns: ".minimalistique-colcade-column",
      items: ".posts-entry.blogposts-list",
    }
  );
})();
