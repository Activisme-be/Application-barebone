var gulp = require('gulp');

var CssFiles = [
    './node_modules/admin-lte/dist/css/AdminLTE.css',
    './node_modules/admin-lte/dist/css/skins/skin-blue.css'
];

var JsFiles = [
    './node_modules/admin-lte/dist/js/app.js'
];

var ImgFiles = [
    './node_modules/admin-lte/dist/img/user2-160x160.jpg'
];

gulp.task('default', function() {
  gulp.start('copy-css', 'copy-js', 'copy-avatar');
});

gulp.task('copy-css', function () {
    gulp.src(CssFiles)
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('copy-js', function () {
    gulp.src(JsFiles)
        .pipe(gulp.dest('./assets/js'));
});

gulp.task('copy-avatar', function () {
    gulp.src(ImgFiles)
        .pipe(gulp.dest('./assets/img'));
});
