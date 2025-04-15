const path = require("path");
const glob = require("glob");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

// CAPTURA ARQUIVOS SCSS
const scssFiles = glob.sync("./src/styles/*.scss").reduce((entries, file) => {
  const name = path.basename(file, ".scss");
  entries[name] = file;
  return entries;
}, {});

// LOG PARA VERIFICAR OS ARQUIVOS .scss ENCONTRADOS
console.log("SCSS ENTRIES:", scssFiles);

// CAPTURA ARQUIVOS JS
const jsFiles = glob.sync("./src/*.js").reduce((entries, file) => {
  const name = path.basename(file, ".js");
  entries[name] = file;
  return entries;
}, {});

module.exports = {
  entry: { ...scssFiles, ...jsFiles },
  output: {
    path: path.resolve(__dirname, "build"),
    filename: "[name].js",
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env", "@babel/preset-react"],
          },
        },
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "sass-loader"
        ],
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader"
        ],
        include: /node_modules/,
      }
    ],
  },
  resolve: {
    extensions: [".js", ".jsx"],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),
  ],
};
