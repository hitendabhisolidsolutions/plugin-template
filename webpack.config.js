const path = require("path");

module.exports = {
  entry: {
    main: "./scripts/script.js",
  },
  output: {
    filename: "[name].bundle.js",
    path: path.resolve(__dirname, "dist"),
  },
};
