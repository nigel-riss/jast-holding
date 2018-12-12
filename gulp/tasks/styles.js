import gulp from 'gulp';
import sass from 'gulp-sass';
import wait from 'gulp-wait';
import sassModuleImporter from 'sass-module-importer';
import { onError } from 'gulp-notify';

const dirs = {
  src: './src/sass/**/*.scss',
  dest: './dist'
}
gulp.task("styles", function () {
  return gulp.src(dirs.src)
    .pipe(wait(100))
    .pipe(sass({
      importer: sassModuleImporter()
    }))
    .on('error', onError((error) => {
      return {
        title: 'Sass Error',
        message: error.message
      };
    }))
    .on("error", function (errorInfo) {
      console.log(errorInfo.toString());
      this.emit("end");
    })
    .pipe(gulp.dest(dirs.dest));
});
