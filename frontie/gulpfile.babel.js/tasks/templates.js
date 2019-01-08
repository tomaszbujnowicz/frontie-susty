/*
 * @title Styles
 * @description A task to compile templates via Twig.js
 */

// Dependencies
import { src, dest } from 'gulp';
import plumber from 'gulp-plumber';
import twig from 'gulp-twig';
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from "../config";

// Task
export function templates() {
  return src(paths.templates.src)
    .pipe(plumber({errorHandler}))
    .pipe(twig())
    .pipe(dest(paths.templates.dest))
};
