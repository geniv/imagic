<?php

  /**
   *
   * Reimplement imagick libraries
   * made by GFdesign for GoodFlowAdmin
   * programming by Geniv (geniv.radek@gmail.com)
   *
   * 100% function garanteed on Linux
   *
   */
  final class Imagic {
    protected $obrazek; //vnitrni ukazatel
    protected $tempdir = ".tmp";  //slozka pro temp
    const IMAGICPREFIX = 'tempimagic';
    //const IMAGICMIN = '6.5.0';

    //channels
    const CHANNEL_RED = 'Red';
    const CHANNEL_GRAY = 'Gray';
    const CHANNEL_CYAN = 'Cyan';
    const CHANNEL_GREEN = 'Green';
    const CHANNEL_MAGENTA = 'Magenta';
    const CHANNEL_BLUE = 'Blue';
    const CHANNEL_YELLOW = 'Yellow';
    const CHANNEL_ALPHA = 'Alpha';
    const CHANNEL_OPACITY = 'Opacity';
    const CHANNEL_BLACK = 'Black';
    const CHANNEL_INDEX = 'Index';
    const CHANNEL_ALL = 'All';
    const CHANNEL_RGB = 'RGB';
    const CHANNEL_RGBA = 'RGBA';
    const CHANNEL_CMYK = 'CMYK';
    const CHANNEL_CMYKA = 'CMYKA';

    //colorspaces
    const COLORSPACE_RGB  = 'RGB';
    const COLORSPACE_GRAY  = 'Gray';
    const COLORSPACE_TRANSPARENT  = 'Transparent';
    const COLORSPACE_OHTA  = 'OHTA';
    const COLORSPACE_LAB  = 'Lab';
    const COLORSPACE_XYZ  = 'XYZ';
    const COLORSPACE_YCBCR  = 'YCbCr';
    const COLORSPACE_YCC  = 'YCC';
    const COLORSPACE_YIQ  = 'YIQ';
    const COLORSPACE_YPBPR  = 'YPbPr';
    const COLORSPACE_YUV  = 'YUV';
    const COLORSPACE_CMYK  = 'CMYK';
    const COLORSPACE_SRGB  = 'sRGB';
    const COLORSPACE_HSB  = 'HSB';
    const COLORSPACE_HSL  = 'HSL';
    const COLORSPACE_HWB  = 'HWB';
    const COLORSPACE_REC601LUMA  = 'Rec601Luma';
    const COLORSPACE_REC709LUMA  = 'Rec709Luma';
    const COLORSPACE_LOG  = 'Log';
    const COLORSPACE_CMY  = 'CMY';

    //img types
    const IMGTYPE_BILEVEL  = 'Bilevel';
    const IMGTYPE_GRAYSCALE  = 'Grayscale';
    const IMGTYPE_GRAYSCALEMATTE  = 'GrayscaleMatte';
    const IMGTYPE_PALETTE  = 'Palette';
    const IMGTYPE_PALETTEMATTE  = 'PaletteMatte';
    const IMGTYPE_TRUECOLOR  = 'TrueColor';
    const IMGTYPE_TRUECOLORMATTE  = 'TrueColorMatte';
    const IMGTYPE_COLORSEPARATION  = 'ColorSeparation';
    const IMGTYPE_COLORSEPARATIONMATTE  = 'ColorSeparationMatte';
    const IMGTYPE_OPTIMIZE  = 'optimize';

    //filtrs
    const FILTER_POINT  = 'Point';
    const FILTER_BOX  = 'Box';
    const FILTER_TRIANGLE  = 'Triangle';
    const FILTER_HERMITE  = 'Hermite';
    const FILTER_HANNING  = 'Hanning';
    const FILTER_HAMMING  = 'Hamming';
    const FILTER_BLACKMAN  = 'Blackman';
    const FILTER_GAUSSIAN  = 'Gaussian';
    const FILTER_QUADRATIC  = 'Quadratic';
    const FILTER_CUBIC  = 'Cubic';
    const FILTER_CATROM  = 'Catrom';
    const FILTER_MITCHELL  = 'Mitchell';
    const FILTER_LANCZOS  = 'Lanczos';
    const FILTER_BESSEL  = 'Bessel';
    const FILTER_SINC  = 'Sinc';

    //gravity
    const GRAVITY_NORTHWEST = 'NorthWest';
    const GRAVITY_NORTH = 'North';
    const GRAVITY_NORTHEAST = 'NorthEast';
    const GRAVITY_WEST = 'West';
    const GRAVITY_CENTER = 'Center';
    const GRAVITY_EAST = 'East';
    const GRAVITY_SOUTHWEST = 'SouthWest';
    const GRAVITY_SOUTH  = 'South';
    const GRAVITY_SOUTHEAST = 'SouthEast';
    const GRAVITY_FORGET = 'Forget';
    const GRAVITY_NONE = 'None';

    //distortions
    const DISTORTION_AFFINE = 'Affine';
    const DISTORTION_AFFINEPROJECTION = 'AffineProjection';
    const DISTORTION_ARC = 'Arc';
    //const DISTORTION_BILINEAR = ''; //BilinearForward, BilinearReverse,
    const DISTORTION_PERSPECTIVE = 'Perspective';
    const DISTORTION_PERSPECTIVEPROJECTION = 'PerspectiveProjection';
    const DISTORTION_SCALEROTATETRANSLATE = 'ScaleRotateTranslate'; //ScaleRotateTranslate/SRT
    //const DISTORTION_POLYNOMIAL = '';
    const DISTORTION_POLAR = 'Polar';
    const DISTORTION_DEPOLAR = 'DePolar';
    const DISTORTION_BARREL = 'Barrel';
    const DISTORTION_BARRELINVERSE = 'BarrelInverse';
    const DISTORTION_SHEPARDS = 'Shepards';
    //const DISTORTION_SENTINEL = '';

    //alpha channels
    const ALPHACHANNEL_ACTIVATE = 'on';
    const ALPHACHANNEL_DEACTIVATE = 'off';
    //const ALPHACHANNEL_RESET = '';
    const ALPHACHANNEL_SET = 'set';
    //const ALPHACHANNEL_UNDEFINED = '';
    const ALPHACHANNEL_COPY = 'copy';
    const ALPHACHANNEL_EXTRACT = 'extract';
    const ALPHACHANNEL_OPAQUE = 'opaque';
    const ALPHACHANNEL_SHAPE = 'shape';
    //Background
    const ALPHACHANNEL_TRANSPARENT = 'transparent';

    //compressions
    //const COMPRESSION_UNDEFINED = '';
    const COMPRESSION_NO = 'None';
    const COMPRESSION_BZIP = 'BZip';
    const COMPRESSION_FAX = 'Fax';
    const COMPRESSION_GROUP4 = 'Group4';
    const COMPRESSION_JPEG = 'JPEG';
    const COMPRESSION_JPEG2000 = 'JPEG2000';
    const COMPRESSION_LOSSLESSJPEG = 'Lossless';
    const COMPRESSION_LZW = 'LZW';
    const COMPRESSION_RLE = 'RLE';
    const COMPRESSION_ZIP = 'Zip';
    //const COMPRESSION_DXT1 = '';
    //const COMPRESSION_DXT3 = '';
    //const COMPRESSION_DXT5 = '';

    //paints
    const PAINT_POINT = 'point';
    const PAINT_REPLACE = 'replace';
    const PAINT_FLOODFILL = 'floodfill';
    const PAINT_FILLTOBORDER = 'filltoborder';
    const PAINT_RESET = 'reset';

    //linecaps
    //const LINECAP_UNDEFINED = '';
    const LINECAP_BUTT = 'butt';
    const LINECAP_ROUND = 'round';
    const LINECAP_SQUARE = 'square';

    //linejoins
    //const LINEJOIN_UNDEFINED = '';
    const LINEJOIN_MITER = 'miter';
    const LINEJOIN_ROUND = 'round';
    const LINEJOIN_BEVEL = 'bevel';

/*
    const COMPOSITE_DEFAULT = '';
    const COMPOSITE_UNDEFINED = '';
    const COMPOSITE_NO = '';
    const COMPOSITE_ADD = '';
    const COMPOSITE_ATOP = '';
    const COMPOSITE_BLEND = '';
    const COMPOSITE_BUMPMAP = '';
    const COMPOSITE_CLEAR = '';
    const COMPOSITE_COLORBURN = '';
    const COMPOSITE_COLORDODGE = '';
    const COMPOSITE_COLORIZE = '';
    const COMPOSITE_COPYBLACK = '';
    const COMPOSITE_COPYBLUE = '';
    const COMPOSITE_COPY = '';
    const COMPOSITE_COPYCYAN = '';
    const COMPOSITE_COPYGREEN = '';
    const COMPOSITE_COPYMAGENTA = '';
    const COMPOSITE_COPYOPACITY = '';
    const COMPOSITE_COPYRED = '';
    const COMPOSITE_COPYYELLOW = '';
    const COMPOSITE_DARKEN = '';
    const COMPOSITE_DSTATOP = '';
    const COMPOSITE_DST = '';
    const COMPOSITE_DSTIN = '';
    const COMPOSITE_DSTOUT = '';
    const COMPOSITE_DSTOVER = '';
    const COMPOSITE_DIFFERENCE = '';
    const COMPOSITE_DISPLACE = '';
    const COMPOSITE_DISSOLVE = '';
    const COMPOSITE_EXCLUSION = '';
    const COMPOSITE_HARDLIGHT = '';
    const COMPOSITE_HUE = '';
    const COMPOSITE_IN = '';
    const COMPOSITE_LIGHTEN = '';
    const COMPOSITE_LUMINIZE = '';
    const COMPOSITE_MINUS = '';
    const COMPOSITE_MODULATE = '';
    const COMPOSITE_MULTIPLY = '';
    const COMPOSITE_OUT = '';
    const COMPOSITE_OVER = '';
    const COMPOSITE_OVERLAY = '';
    const COMPOSITE_PLUS = '';
    const COMPOSITE_REPLACE = '';
    const COMPOSITE_SATURATE = '';
    const COMPOSITE_SCREEN = '';
    const COMPOSITE_SOFTLIGHT = '';
    const COMPOSITE_SRCATOP = '';
    const COMPOSITE_SRC = '';
    const COMPOSITE_SRCIN = '';
    const COMPOSITE_SRCOUT = '';
    const COMPOSITE_SRCOVER = '';
    const COMPOSITE_SUBTRACT = '';
    const COMPOSITE_THRESHOLD = '';
    const COMPOSITE_XOR = '';
*/

//TODO otazka jestli by hlavni trida mela podporovat 'fluent interface' ???
//tim padem by se to vsechno nasladalo do pole a pri urcite metode by se to postupne nahrnulo na konzoly??!

    /**
     *
     * Konstruktor tridy
     *
     * @param obr nazev obrazku pro nacteni
     */
    public function __construct($obr = NULL) {
      try {
        $result = true; //?!

        //vytvoreni lokalniho temp souboru
        $this->createTemp();

        //vytvoreni temp obrazku
        $this->obrazek->stream = tempnam($this->tempdir, self::IMAGICPREFIX);
        if (!file_exists($this->obrazek->stream)) {
          echo "nebyl vytvoren temp soubor!";
          exit(1);
        }

        //nacteni obrazku do temp souboru
        if (!empty($obr)) {
          if (file_exists($obr)) {
            $this->obrazek->name = $obr;
            $result = copy($obr, $this->obrazek->stream);
          } else { throw new ExceptionImagic; }
        }

      } catch (ExceptionImagic $e) {
        echo 'nacitany obrazek proste neexistuje...';
      }

      return $result;
    }

    public function __get($var) {
      return $this->obrazek->$var;
    }

    //uklid po sobe
    public function __destruct() {
      $this->destroy();
    }

    protected function createTemp() {
      if (!file_exists($this->tempdir) &&
          !mkdir($this->tempdir))
      {
        echo "neporadilo se vytvorit lokalni odkladaci slozku!";
        exit(1);
      }
    }

  /**
   *
   * Nacte obrazek ze zadaneho souboru
   *
   * @param filename nazev obrazku
   * @return bool o provedeni akce
   */
    public function readImage($filename) {
      $result = false;
      if (file_exists($filename))
      { //pokud existuje napise si jmeno a zkopikuje do tempu
        $this->obrazek->name = $filename;
        $result = copy($filename, $this->obrazek->stream);
      }

      return $result;
    }

  /**
   *
   * Ulozi obrazek do zadane cesty
   *
   * @param filename cesta k obrazku
   * @return bool o provedeni akce
   */
    public function writeImage($filename = NULL) {
      $result = false;
      if (is_null($filename))
      { //pokud neni pouzit nazev zapise do stejneho z ktereho cetl
        $filename = $this->obrazek->name;
      }

      if (!Empty($filename))
      { //pokud je nazev neprazdny
        $result = copy($this->obrazek->stream, $filename);
      }

      return $result;
    }


    public function getFormat($format) {
      return $this->obrazek->format;
    }

    public function setFormat($format) {
      $this->obrazek->format = $format;
      return $this;
    }

  /*
   * Imagick::displayImage
   * Imagick::readImageFile($filehandle)
   *
   * Imagick::getImageFilename() - vraci nazev obrazku v sekvenci
   * Imagick::setImageFilename($filename) - nastavuje nazev obrazku v sekvenci
   **/

    public function adaptiveBlurImage($radius, $sigma) {
      return $this->execConvert("-adaptive-blur {$radius}x{$sigma}");
    }

    private function absolutesize($columns, $rows) {
      return ($columns > 0 && $rows > 0 ? "\!" : "");
    }
//FIXME pridat volitelny parametr na vypnuty absolutni velikosti $absolutne = true
    public function adaptiveResizeImage($columns, $rows) {
      $absolute = $this->absolutesize($columns, $rows);
      $columns = (!Empty($columns) ? $columns : "");
      $rows = (!Empty($rows) ? $rows : "");

      return $this->execConvert("-adaptive-resize {$columns}x{$rows}{$absolute}");
    }

    public function adaptiveSharpenImage($radius, $sigma) {
      return $this->execConvert("-adaptive-sharpen {$radius}x{$sigma}");
    }

  /*
  //append!?!
    public function addImage($source)
    {
      //$source
    }
  */

    public function annotateImage($draw_settings, $x, $y, $angle, $text) {
      $draw = $draw_settings->getDraw();
      return $this->execConvert("-draw '{$draw}' -annotate {$angle}x{$angle}+{$x}+{$y} '{$text}'");
    }

    public function blurImage($radius, $sigma, $channel = NULL) {
      $channel = (!Empty($channel) ? "-channel {$channel}" : "");

      return $this->execConvert("-blur {$radius}x{$sigma} {$channel}");
    }

    public function borderImage($bordercolor, $width, $height) {
      return $this->execConvert("-bordercolor {$bordercolor} -border {$width}x{$height}");
    }

  //efekt
    public function charcoalImage($radius, $sigma) {
      return $this->execConvert("-charcoal {$sigma}x{$radius}");
    }

  /*
    public function chopImage($width, $height, $x, $y)
    { //dodelat?!
      return $this->execConvert("-chop {$width}x{$height} -gravity Center -region {$x}x{$y}");  // -gravity Center,South -region {$x}x{$y}
    }
  */
  //system("composite -compose {$composite} -geometry +{$x}+{$y} '{$composite_object}' '{$this->obrazek->stream}' '{$this->obrazek->stream}'", $result);

  //http://cz.php.net/manual/en/imagick.constants.php#imagick.constants.compositeop
  //src, dst, clear,  xor, over, in, out, atop, dst_over, dst_in, dst_out, dst_atop
  //http://www.imagemagick.org/Usage/compose/
  //slouceni obrazku
    public function compositeImage($composite_object, $composite, $x, $y) {
      //return $this->execConvert("-compose {$composite} -geometry +{$x}+{$y} -composite '{$composite_object->stream}'");
      $pozice = (is_numeric($x) && is_numeric($y) ? "-geometry +{$x}+{$y}" : "-gravity {$x}");
      system("convert -compose {$composite} {$pozice} -composite '{$this->obrazek->stream}' '{$composite_object->stream}' '{$this->obrazek->stream}'", $result);

      return $result;
    }

    public function contrastImage($sharpen) {
      $sharpen = ($sharpen ? "+" : "-");
      return $this->execConvert("{$sharpen}contrast");
    }

    public function contrastStretchImage($black_point, $white_point) {
      return $this->execConvert("-contrast-stretch {$black_point}x{$white_point}%");
    }

    public function clear() {
      //vymazani obsahu streamu
      $this->obrazek->stream = NULL;
      $this->obrazek = NULL;
    }

  //klonovani
    public function cloneImage() {
      //udela klon obrazku tim ze vytvori znovu sama sebe a vrati ukazatel
      $result = new self($this->obrazek->stream);
//TODO melo by fungovat
      return $result;
    }

  //vysec obrazku
    public function cropImage($width, $height, $x, $y) {
      return $this->execConvert("-crop {$width}x{$height}+{$x}+{$y}");
    }

    public function colorFloodfillImage($fill, $fuzz, $bordercolor, $x, $y) {
      return $this->execConvert("-fill '{$fill}' -fuzz {$fuzz}% -floodfill +{$x}+{$y} '{$bordercolor}'");
    }

  /*
    //public function colorizeImage($colorize, $opacity)
    { //dodelat?!
      return $this->execConvert("-colorize '{$colorize}'"); //-fill '{$colorize}'
    }
  */

    public function distortImage($method, $arguments) {
      return $this->execConvert("-distort {$method} '{$arguments}'");
    }

    public function despeckleImage() {
      return $this->execConvert("-despeckle");
    }

    public function destroy() {
      unlink($this->obrazek->stream); //smazani ukazatele
      unset($this->obrazek);  //odalokovani
    }

    public function drawImage($draw) {
      $draw = $draw->getDraw();
      return $this->execConvert("-draw '{$draw}'");
    }

    public function edgeImage($radius) {
      return $this->execConvert("-edge {$radius}");
    }

    public function evaluateImage($op, $value) {
      return $this->execConvert("-evaluate {$op} {$value}");
    }

    public function embossImage($radius, $sigma) {
      return $this->execConvert("-emboss {$radius}x{$sigma}");
    }

    public function equalizeImage() {
      return $this->execConvert("-equalize");
    }

    public function extentImage($width, $height, $x, $y) {
      return $this->execConvert("-extent {$width}x{$height}+{$x}+{$y}");
    }

    public function flipImage() {
      return $this->execConvert("-flip");
    }

    public function flopImage() {
      return $this->execConvert("-flop");
    }

    public function flattenImages() {
      return $this->execConvert("-flatten");
    }

    public function frameImage($matte_color, $width, $height, $inner_bevel, $outer_bevel) {
      return $this->execConvert("-mattecolor '{$matte_color}' -frame {$width}x{$height}+{$inner_bevel}+{$outer_bevel}");
    }

    public function fxImage($expression) {
      return $this->execConvert("-fx '{$expression}'");
    }

    public function gammaImage($gamma) {
      return $this->execConvert("-gamma {$gamma}");
    }

  //gray scale: -fx '0.29900*R+0.58700*G+0.11400*B'
  //-colorspace gray

    public function getImageWidth() {
      $a = getimagesize($this->obrazek->stream);
      return $a[0];
    }

    public function getImageHeight() {
      $a = getimagesize($this->obrazek->stream);

      return $a[1];
    }

    public function getImageDepth() {
      $a = getimagesize($this->obrazek->stream);

      return $a["bits"];
    }

    public function getImageSize() {
      return filesize($this->obrazek->stream);
    }

    public function getImageMime() {
      $a = getimagesize($this->obrazek->stream);

      return $a["mime"];
    }

    public function sendImageHeader() {
      $a = getimagesize($this->obrazek->stream);

      header("content-type: {$a["mime"]}");
    }

    public function getVersion() {
      system("convert -version", $result);

      return $result;
    }

    public function gaussianBlurImage($radius, $sigma) {
      return $this->execConvert("-gaussian-blur {$radius}x{$sigma}");
    }

    public function functionImage($function, $arguments) {
      return $this->execConvert("-function {$function} {$arguments}");
    }

    public function implodeImage($radius) {
      return $this->execConvert("-implode {$radius}");
    }

    public function levelImage($blackPoint, $gamma, $whitePoint) {
      return $this->execConvert("-level {$blackPoint},{$whitePoint}%,{$gamma}");
    }

    public function linearStretchImage($blackPoint, $whitePoint) {
      return $this->execConvert("-linear-stretch {$blackPoint}x{$whitePoint}%");
    }

    public function medianFilterImage($radius) {
      return $this->execConvert("-median {$radius}");
    }

    public function modulateImage($brightness, $saturation, $hue) {
      return $this->execConvert("-modulate {$brightness},{$saturation},{$hue}");
    }

    public function motionBlurImage($radius, $sigma, $angle) {
      return $this->execConvert("-motion-blur {$radius}x{$sigma}+{$angle}");
    }

    public function negateImage($gray) {
      $g = ($gray ? "+" : "-");
      return $this->execConvert("{$g}negate");
    }

    public function oilPaintImage($radius) {
      return $this->execConvert("-paint {$radius}");
    }

    public function polaroidImage($properties, $angle) {
      $draw = $properties->getDraw();
      return $this->execConvert("-draw '{$draw}' -polaroid {$angle}");
    }

    public function radialBlurImage($angle) {
      return $this->execConvert("-radial-blur {$angle}");
    }

    public function raiseImage($width, $height, $x, $y, $raise) {
      $r = ($raise ? "+" : "-");
      return $this->execConvert("{$r}raise {$width}x{$height}+{$x}+{$y}");
    }

    public function reduceNoiseImage($radius) {
      return $this->execConvert("-noise {$radius}");
    }
  //$filter = 0, $blur = 1
    public function resizeImage($columns, $rows, $absolutne = true) {
      //obsluha absolutniho zmenseni, pri XxY a je treba dodrzet z W i H
      $absolute = ($absolutne ? $this->absolutesize($columns, $rows) : "");
      $columns = (!Empty($columns) ? $columns : "");
      $rows = (!Empty($rows) ? $rows : "");

      return $this->execConvert("-resize {$columns}x{$rows}{$absolute}");
    }

    public function rollImage($x, $y) {
      return $this->execConvert("-roll +{$x}+{$y}");
    }

  //"blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)"
  //http://www.imagemagick.org/contrib/color-converter.php
    public function rotateImage($background, $degrees) {
      return $this->execConvert("-rotate {$degrees} -background '{$background}'");
    }

    public function sampleImage($columns, $rows) {
      return $this->execConvert("-sample {$columns}x{$rows}\!");
    }

    public function sepiaToneImage($threshold) {
      return $this->execConvert("-sepia-tone {$threshold}%");
    }

    public function sigmoidalContrastImage($sharpen, $alpha, $beta) {
      $sharpen = ($sharpen ? "+" : "-");

      return $this->execConvert("{$sharpen}sigmoidal-contrast {$alpha}x{$beta}");
    }
//FIXME pridat volitelny parametr na vypnuty absolutni velikosti $absolutne = true
    public function scaleImage($columns, $rows) {
      $absolute = $this->absolutesize($columns, $rows);
      $columns = (!Empty($columns) ? $columns : "");
      $rows = (!Empty($rows) ? $rows : "");

      return $this->execConvert("-scale {$columns}x{$rows}{$absolute}");
    }
  //R, G, B
    public function separateImageChannel($channel) {
      return $this->execConvert("-channel {$channel} -separate");
    }

    public function selfCommandLine($command) {
      return $this->execConvert($command);
    }

    public function setImageAlphaChannel($mode) {
      //?????
      return $this->execConvert("-alpha {$mode}");
    }

    public function setBackgroundColor($background) {
      return $this->execConvert("-background '{$background}'");
    }


  //Undefined, CMYK, Gray, HSB, HSL, HWB, Lab, OHTA, RGB, sRGB, Transparent, XYZ, YCbCr, YCC, YIQ, YPbPr, YUV
    public function setImageColorSpace($colorspace) {
      return $this->execConvert("-colorspace {$colorspace}");
    }

    public function setImageCompression($compression) {
      return $this->execConvert("-compress {$compression}");
    }

    public function setImageCompressionQuality($quality = 75) {
      return $this->execConvert("-quality {$quality}");
    }

  //Red, Green, Blue, Alpha, Cyan, Magenta, Yellow, Black, Opacity, Index, RGB, RGBA, CMYK, CMYKA
    public function setImageChannel($channel) {
      return $this->execConvert("-channel {$channel}");
    }

    public function setImageDepth($depth) {
      return $this->execConvert("-depth {$depth}");
    }

  //Bilevel, Grayscale, GrayscaleMatte, Palette, PaletteMatte, TrueColor, TrueColorMatte, ColorSeparation, ColorSeparationMatte
    public function setImageType($image_type) {
      return $this->execConvert("-type {$image_type}");
    }

  //Point, Hermite, Cubic, Box, Gaussian, Catrom, Triangle, Quadratic, Mitchell
    public function setImageFilter($filter) {
      return $this->execConvert("-filter {$filter}");
    }

    public function setFont($font) {
      return $this->execConvert("-font '{$font}'");
    }

    public function setGravity($gravity) {
      return $this->execConvert("-gravity {$gravity}");
    }

    public function setImageMatteColor($matte) {
      return $this->execConvert("-mattecolor '{$matte}'");
    }

    public function setPointSize($point_size) {
      return $this->execConvert("-pointsize {$point_size}");
    }

    public function shadeImage($azimuth, $elevation) {
      //+/-!
      return $this->execConvert("-shade {$azimuth}x{$elevation}");
    }

    //shadowImage
    //setImageFormat() jsou konvertory

    public function sharpenImage($radius, $sigma) {
      return $this->execConvert("-sharpen {$radius}x{$sigma}");
    }

    public function shaveImage($columns, $rows) {
      return $this->execConvert("-shave {$columns}x{$rows}");
    }

    public function shearImage($background, $x_shear, $y_shear) {
      return $this->execConvert("-background '{$background}' -shear {$x_shear}x{$y_shear}");
    }

    public function sketchImage($radius, $sigma, $angle) {
      return $this->execConvert("-sketch {$radius}x{$sigma}+{$angle}");
    }

    public function solarizeImage($threshold) {
      return $this->execConvert("-solarize {$threshold}");
    }

    public function spliceImage($width, $height, $x, $y) {
      return $this->execConvert("-splice {$width}x{$height}+{$x}+{$y}");
    }

    public function spreadImage($radius) {
      return $this->execConvert("-spread {$radius}");
    }

    public function swirlImage($degrees) {
      return $this->execConvert("-swirl {$degrees}");
    }
//FIXME pridat volitelny parametr na vypnuty absolutni velikosti $absolutne = true
    public function thumbnailImage($columns, $rows) {
      $absolute = $this->absolutesize($columns, $rows);
      $columns = (!Empty($columns) ? $columns : "");
      $rows = (!Empty($rows) ? $rows : "");

      return $this->execConvert("-thumbnail {$columns}x{$rows}{$absolute}");
    }

    public function thresholdImage($threshold, $channel = NULL) {
      $channel = (!Empty($channel) ? "-channel {$channel}" : "");

      return $this->execConvert("-threshold {$threshold}% {$channel}");
    }

    public function transparent($color) {
      return $this->execConvert("-transparent '{$color}'");
    }

    public function transparentColor($color) {
      return $this->execConvert("-transparent-color '{$color}'");
    }

    public function tintImage($tint, $opacity) {
      return $this->execConvert("-fill '{$tint}' -tint {$opacity}%");
    }

    public function transposeImage() {
      return $this->execConvert("-transpose");
    }

    public function transverseImage() {
      return $this->execConvert("-transverse");
    }

    public function trimImage($fuzz) {
      return $this->execConvert("-trim -fuzz {$fuzz}%");
    }

    public function unsharpMaskImage($radius, $sigma, $amount, $threshold) {
      return $this->execConvert("-unsharp {$radius}x{$sigma}+{$amount}+{$threshold}");
    }

    public function vignetteImage($radius, $sigma, $x, $y) {
      return $this->execConvert("-vignette {$radius}x{$sigma}+{$x}+{$y}%");
    }

    public function waveImage($amplitude, $length) {
      return $this->execConvert("-wave {$amplitude}x{$length}");
    }

  /**
   *
   * Vytvoreni noveho obrazku
   *
   * @param columns sirka obrazku
   * @param rows vyska obrazku
   * @param background barva pozadi
   * @param format format obrazku, defaultni png
   * @return navrat z konzole
   */
    public function newImage($columns, $rows, $background, $format = "png") {
      //FIXME pokud tato funkce bude volana v gifu a zasebou tak se bude skladat do animace!!!
      system("convert -size {$columns}x{$rows} xc:'{$background}' '{$this->obrazek->stream}.{$format}'", $result);
      //zkopirovani verze s priponou zpet do streamu
      copy("{$this->obrazek->stream}.{$format}", $this->obrazek->stream);
      //smazani verze s priponou
      unlink("{$this->obrazek->stream}.{$format}");

      return $result;
    }

    public function setImageDelay($delay) {
      //nastaveni prodleni...
    }

  /**
   *
   * Spolecna kostra pro konvertovani obrazku
   *
   * @param prikaz konzolovy prikaz pro convert
   * @return navrat z konzoly
   */
    protected function execConvert($prikaz) {
      system("convert {$prikaz} '{$this->obrazek->stream}' '{$this->obrazek->stream}'", $result);

      return $result;
    }

  /**
   *
   * Vrati aktualni stream obrazku
   *
   * @return stream obrazku
   */
    public function getImage() {
      //vypise stream dat obrazku
      $result = file_get_contents($this->obrazek->stream);

      return $result;
    }

  /**
   *
   * Nastavi obrazek danym streamem
   *
   * @param replace stream obrazku na nahrazeni
   * @return pocet zapsanych znaku
   */
    public function setImage($replace) {
      //nastavi stream dat obrazku
      $result = file_put_contents($this->obrazek->stream, $replace);

      return $result;
    }

  /**
   *
   * Vraci nazev obrazku
   *
   * @return nazev obrazku
   */
    public function getFilename() {
      return $this->obrazek->name;
    }

  /**
   *
   * Nastavuje novy nazev obrazku
   *
   * @param filename novy nazev obrazku
   * @return
   */
    public function setFilename($filename) {
      $result = false;
      if (!Empty($filename)) {
        $this->obrazek->name = $filename;
        $result = true;
      }

      return $result;
    }


  }

  class ExceptionImagic extends Exception {}

  /**
   *
   * Reimplementace imagickdraw knihovny
   *
   */
  final class ImagicDraw {
    protected $draw = NULL;

    public function __construct() {
      $this->draw = array();
      return $this;
    }

/*
    public function __get($var) {
      return $this->$var;
    }
*/

    public function getDraw() {
      return implode(' ', $this->draw);
    }

    public function annotation($x, $y, $text) {
      $this->draw[] = sprintf('text %s,%s "%s"', $x, $y, $text);
      return $this;
    }

    public function arc($sx, $sy, $ex, $ey, $sd, $ed) {
      $this->draw[] = sprintf('arc %s,%s %s,%s %s,%s', $sx, $sy, $ex, $ey, $sd, $ed);
      return $this;
    }
  //array(array(x, y), array(x, y))
    public function bezier($coordinates) {
      $row = array();
      foreach ($coordinates as $polozka) {
        $row[] = implode(',', $polozka);
      }
      $row = implode(' ', $row);
      $this->draw[] = sprintf('bezier %s', $row);
      return $this;
    }

    public function circle($ox, $oy, $px, $py) {
      $this->draw[] = sprintf('circle %s,%s %s,%s', $ox, $oy, $px, $py);
      return $this;
    }

    public function color($x, $y, $paintMethod) {
      $this->draw[] = sprintf('color %s,%s %s', $x, $y, $paintMethod);
      return $this;
    }

    public function ellipse($ox, $oy, $rx, $ry, $start, $end) {
      $this->draw[] = sprintf('ellipse %s,%s %s,%s %s,%s', $ox, $oy, $rx, $ry, $start, $end);
      return $this;
    }
  //image over 3,3 0,0 'terminal.gif'
    public function image($x, $y, $w, $h, $image) {
      //FIXME overovat existenci obrazku
      $this->draw[] = sprintf('image over %s,%s %s,%s "%s"', $x, $y, $w, $h, $image);
      return $this;
    }

    public function line($sx, $sy, $ex, $ey) {
      $this->draw[] = sprintf('line %s,%s %s,%s"', $sx, $sy, $ex, $ey);
      return $this;
    }
  //floodfill, reset
    public function matte($x, $y, $paintMethod) {
      $this->draw[] = sprintf('matte %s,%s %s', $x, $y, $paintMethod);
      return $this;
    }

    public function point($x, $y) {
      $this->draw[] = sprintf('point %s,%s', $x, $y);
      return $this;
    }

    public function polygon($coordinates) {
      $row = array();
      foreach ($coordinates as $polozka) {
        $row[] = implode(',', $polozka);
      }
      $row = implode(' ', $row);
      $this->draw[] = sprintf('polygon %s', $row);
      return $this;
    }

    public function polyline($coordinates) {
      $row = array();
      foreach ($coordinates as $polozka) {
        $row[] = implode(",", $polozka);
      }
      $row = implode(' ', $row);
      $this->draw[] = sprintf('polyline %s', $row);
      return $this;
    }

    public function rectangle($x1, $y1, $x2, $y2) {
      $this->draw[] = sprintf('rectangle %s,%s %s,%s', $x1, $y1, $x2, $y2);
      return $this;
    }

    public function rotate($degrees) {
      $this->draw[] = sprintf('rotate %s', $degrees);
      return $this;
    }

    public function roundRectangle($x1, $y1, $x2, $y2, $rx, $ry) {
      $this->draw[] = sprintf('roundrectangle %s,%s %s,%s %s,%s', $x1, $y1, $x2, $y2, $rx, $ry);
      return $this;
    }

    public function scale($x, $y) {
      $this->draw[] = sprintf('scale %s,%s', $x, $y);
      return $this;
    }

    public function setFillColor($fill_pixel) {
      $this->draw[] = sprintf('fill "%s"', $fill_pixel);
      return $this;
    }

    //setFillAlpha

    public function setFillOpacity($fillOpacity) {
      $this->draw[] = sprintf('fill-opacity %s', $fillOpacity);
      return $this;
    }

    public function setFont($font_name) {
      //FIXME overit existenci fontu
      $this->draw[] = sprintf('font "%s"', $font_name);
      return $this;
    }

    public function setFontSize($pointsize) {
      $this->draw[] = sprintf('font-size %s', $pointsize);
      return $this;
    }

    public function setGravity($gravity) {
      $this->draw[] = sprintf('gravity %s', $gravity);
      return $this;
    }

    public function setStrokeColor($stroke_pixel) {
      $this->draw[] = sprintf('stroke "%s"', $stroke_pixel);
      return $this;
    }

    public function setStrokeDashArray($dashArray) {
      $row = implode(' ', $dashArray);
      $this->draw[] = sprintf('stroke-dasharray %s', $row);
      return $this;
    }

    public function setStrokeLineCap($linecap) {
      $this->draw[] = sprintf('stroke-linecap %s', $linecap);
      return $this;
    }

    public function setStrokeLineJoin($linejoin) {
      $this->draw[] = sprintf('stroke-linejoin %s', $linejoin);
      return $this;
    }

    public function setStrokeMiterLimit($miterlimit) {
      $this->draw[] = sprintf('stroke-miterlimit %s', $miterlimit);
      return $this;
    }

    public function setStrokeOpacity($stroke_opacity) {
      $this->draw[] = sprintf('stroke-opacity %s', $stroke_opacity);
      return $this;
    }

    public function setStrokeWidth($stroke_width) {
      $this->draw[] = sprintf('stroke-width %s', $stroke_width);
      return $this;
    }

    public function setViewbox($x1, $y1, $x2, $y2) {
      $this->draw[] = sprintf('viewbox %s %s %s %s', $x1, $y1, $x2, $y2);
      return $this;
    }

    public function skewX($degrees) {
      $this->draw[] = sprintf('skewX %s', $degrees);
      return $this;
    }

    public function skewY($degrees) {
      $this->draw[] = sprintf('skewY %s', $degrees);
      return $this;
    }

    public function translate($x, $y) {
      $this->draw[] = sprintf('translate %s,%s', $x, $y);
      return $this;
    }

  }

  class ExceptionImagicDraw extends Exception {}

?>
