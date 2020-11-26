const { series, src, dest, watch, gulp } = require('gulp'),
  babel = require('gulp-babel'),
  pug = require('gulp-pug'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  imagemin = require('gulp-imagemin'),
  clean = require('gulp-minify-css'),
  bSync = require('browser-sync').create();

var name = 'Html template - My_terassa';

function css_comp(cb) {
  return src('./src/scss/style.scss')
  .pipe(sass())
  .pipe(dest('./output/assets/'))
  .pipe(bSync.stream())
  cb()
}

function css_min(cb) {
  return src('./output/assets/style.css')
  .pipe(autoprefixer())
  .pipe(clean())
  .pipe(dest('./output/assets/'))
  .pipe(bSync.stream())
  cb()
}

function pugreload(cb) {
  return src('./src/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(dest('./output/'))
  .pipe(bSync.stream())
  cb()
}

function htmlreload(cb) {
  return src('./src/**/*.html')
  .pipe(dest('./output/'))
  .pipe(bSync.stream())
  cb()
}

function scriptreload(cb) {
  return src(['src/js/**/*.js'])
    .pipe(dest('./output/assets/'))
    .pipe(bSync.stream())
    cb()
}

function imageminF(cb) {
  return src(['src/img/**/*.png', 'src/img/**/*.jpg', 'src/img/**/*.gif', 'src/img/**/*.svg'])
    .pipe(imagemin())
    .pipe(dest('output/assets/img/'))
    .pipe(bSync.stream())
    cb()
}

function serve(cb) {

  bSync.init({
    server: {
      baseDir: './output/'
    }
  })

  watch('./src/**/*.pug', series('pugreload'))
  watch('./src/**/*.html', series('htmlreload'))
  watch('./src/**/*.s[ac]ss', series('css_comp'))
  watch('./src/**/*.js', series('scriptreload'))
  watch('./src/img/**/*', series('imageminF'))

  cb()
}

exports.default = serve;
exports.pugreload = pugreload;
exports.css_comp = css_comp;
exports.scriptreload = scriptreload;
exports.css_min = css_min;
exports.imageminF = imageminF;
exports.htmlreload = htmlreload;
