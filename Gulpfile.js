// USED LIBRARIES.
// ----------------------------------------------
var gulp       = require('gulp-help')(require('gulp'));
var livereload = require('gulp-livereload');

// CSS File array
var CssFiles = [
    './node_modules/admin-lte/dist/css/AdminLTE.css',
    './node_modules/admin-lte/dist/css/skins/skin-blue.css'
];

// Javascript file array.
var JsFiles = ['./node_modules/admin-lte/dist/js/app.js'];

// Img file array.
var ImgFiles = ['./node_modules/admin-lte/dist/img/user2-160x160.jpg'];

// COMMAND: gulp
gulp.task('default', 'The default task for gulp.', function() {
    gulp.start('copy-js', 'copy-css', 'copy-avatar');
});

// COMMAND: gulp copy-css
gulp.task('copy-css', 'Copy the css file to the asset folder.', function () {
    gulp.src(CssFiles)
        .pipe(gulp.dest('./assets/css'));
});

// COMMAND: gulp copy-js
gulp.task('copy-js', 'Copy the js files to the asset folder.', function () {
    gulp.src(JsFiles)
        .pipe(gulp.dest('./assets/js'))
});

// COMMAND: gulp copy-avatar
gulp.task('copy-avatar', 'Copy the default avatar to the asset folder.', function () {
    gulp.src(ImgFiles)
        .pipe(gulp.dest('./assets/img'));
});

// COMMAND: gulp watch
// gulp.task('watch', function () {
//     livereload.listen();
//     gulp.watch(['dist/**']).on('change', livereload.changed);
// });
