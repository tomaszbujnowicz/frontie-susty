/*
 * @title Images
 * @description A task to copy images
 */

// Dependencies
import { src, dest } from 'gulp';
import babel from 'gulp-babel';
import plumber from 'gulp-plumber';
import changed from "gulp-changed";
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from "../config";

// Task
export function images() {
  return src(paths.images.src)
    .pipe(plumber({errorHandler}))
    .pipe(changed(paths.images.dest))
    .pipe(dest(paths.images.dest));
}
