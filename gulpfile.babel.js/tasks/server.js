/*
 * @title Server
 * @description A task to initialise a local server
 */

// Dependencies
import browserSync from 'browser-sync';

// Config
import { paths } from "../config";

// Task
// const server = browserSync.create();

export function serve(cb) {
  browserSync.init({
    proxy: paths.wp.proxy,
    notify: false
  });
  cb();
}

export function reload(cb) {
  browserSync.reload();
  cb();
}
