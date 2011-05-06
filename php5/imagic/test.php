<?
/*
 *      test.php
 *
 *      Copyright 2011 geniv <geniv.radek@gmail.com>
 *
 */

  $error = print_r(error_get_last(), true);
  if (!empty($error)) {
    echo '<pre>'.$error.'</pre>';
  }

  include_once 'imagic.php';

  $problem = 'img/problem.jpg';

  $picture = 'img/Answer_to_Life.png';
  $picture2 = 'img/lena_std.tiff';
  $picture3 = 'img/25909-bigthumbnail.jpg';

  $suffix = pathinfo($picture3, PATHINFO_EXTENSION);
  $out1 = 'img/out1.'.$suffix;
  $out2 = 'img/out2.'.$suffix;

  $log1 = $log2 = array();

////////////////////////////////////////////////////////////////////////////////

  $draw = new ImagicDraw();
  $draw->setFillColor('#999999')
        ->setFont('Bookman-DemiItalic')
        ->setFontSize(30)
        ->annotation(10, 40, 'nekoukej, kukuč :D')
        ;

  $canvas = new Imagic();
  $canvas->setTempPath('img')
          ->newImage(50, 50, 'gold')
          ->setImageFormat('jpg')
          ->rotateImage('blue', 39)
          //->setImageFilename('img/pokus1.jpg')
          //->writeImage()
          ;

  $points = array(0,0, 25,25,
                 100,0, 100,50);

  $image = new Imagic($picture3);
  $image->setTempPath('img')
        //->setImageFilename($picture2)
        //->setImageFormat('png')
        //->setImagePage(200, 200, 1, 1)
        //->readImage($picture3)
        //->contrastStretchImage(1, 27, Imagic::CHANNEL_YELLOW)
        //->cropImage(200, 200, 50, 70)
        //->cropThumbnailImage(200, 100)
        //->cycleColormapImage(1)
        //->deskewImage(10)
        //->despeckleImage()
        //->setImageBackgroundColor('#fad888')
        //->setImageVirtualPixelMethod('Background')
        //->distortImage(Imagic::DISTORTION_AFFINE, $points, true)
        //->edgeImage(2)
        //->drawImage($draw)
        //->enhanceImage()
        //->equalizeImage()
        //->evaluateImage(5, 3, Imagic::CHANNEL_RED)
        //->extentImage(100, 100, 100, 100)
        //->flipImage()
        //->flopImage()
        //->frameImage('#0000ff', 10, 10, 3, 3)
        //->functionImage(Imagic::FUNCTION_ARCTAN, array(1.0, 0.5, 1.0, 0.5))
        //->fxImage('(1.0/(1.0+exp(10.0*(0.5-u)))-0.006693)*1.0092503')
        //->gammaImage(4)
        //->setCompression(Imagic::COMPRESSION_JPEG)
        //->gaussianBlurImage(4, 4)
        //->setImage($canvas)
        //->resizeImage(200, 200, Imagic::FILTER_HAMMING, 0, true)
        ->thumbnailImage(200, 100, true)
        //->adaptiveBlurImage(5, 3)
        //->adaptiveBlurImage(5, '4a', Imagic::CHANNEL_RED)
        //->adaptiveResizeImage(0, 768)
        //->adaptiveResizeImage(100, 100, false)
        //->adaptiveResizeImage(200, 200, true)
        //->adaptiveSharpenImage(2, 1, Imagic::CHANNEL_BLUE)
        //->borderImage('red', 10, 10)
        //->adaptiveThresholdImage(10, 10, 1)
        //->chopImage(200, 200, 0, 0)
        //->annotateImage($draw, 10, 45, 0, 'The quick brown fox jumps over the lazy dog')
        //->clipImage()
        //->colorizeImage('#000078', 0)
        //->compositeImage($canvas, Imagic::COMPOSITE_OVER, 30, 40)
        //->borderImage('red', 10, 10)
        //->borderImage('gold', 5, 5)
        //->compositeImage($canvas, Imagic::COMPOSITE_OVER, 180, 190)
        //->borderImage('blue', 2, 2)
        //->contrastImage(false)
        ->writeImage($out1)
        ;
//echo $image->getImage();
  $canvas->destroy();
  //$image->writeImage($out1);

  $log1[] = $image->getImageFilename();
  $log1[] = $image->getImageFormat();
  $log1[] = $image->getImageHeight();
  $log1[] = $image->getImageWidth();
  $log1[] = $image->getImageDelay();
  $log1[] = implode(', ', $image->getImagePage());
  $log1[] = ($image->getState() ? 'redy' : 'nekde je chyba');

//var_dump($image->getImageGeometry());
//var_dump($image->getImagePage());
//var_dump($image->getVersion());
//var_dump(Imagic::getVersion('versionNumber'));

  //$log1[] = print_r($image, true);

////////////////////////////////////////////////////////////////////////////////

  $localhost = array('127.0.0.1', '127.0.1.1'); //omezeni jen na local
  if (in_array($_SERVER['REMOTE_ADDR'], $localhost)) {

    $draw = new ImagickDraw();
    $draw->setFillColor('#999999');
    $draw->setFont('Bookman-DemiItalic');
    $draw->setFontSize(30);
    $draw->annotation(10, 40, 'nekoukej, kukuč :D');

    $canvas = new Imagick();
    $canvas->newImage(50, 50, 'gold');
    $canvas->setImageFormat('jpg');
    $canvas->rotateImage('blue', 39);
    //$canvas->setImageFilename('img/pokus.png');
    //$canvas->writeImage();

    $image = new Imagick($picture3);
    //$image->setImageFilename($picture2);
    //$image->setImageFormat('tiff');
    //$image->setImagePage(200, 200, 1, 1);
    //$image->readImage($picture3);
    //$image->contrastStretchImage(1, 27, Imagick::CHANNEL_YELLOW);
    //$image->cropImage(200, 200, 50, 70);
    //$image->cropThumbnailImage(200, 100);
    //$image->cycleColormapImage(1);
    //$image->deskewImage(10);
    //$image->despeckleImage();
    //$image->setimagebackgroundcolor('#fad888');
    //$image->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_BACKGROUND);
    //$image->distortImage(Imagick::DISTORTION_AFFINE, $points, true);
    //$image->edgeImage(2);
    //$image->drawImage($draw);
    //$image->enhanceImage();
    //$image->equalizeImage();
    //$image->extentImage(100, 100, 100, 100);
    //$image->flipImage();
    //$image->flopImage();
    //$image->frameImage('#0000ff', 10, 10, 3, 3);
    //$image->functionImage(Imagick::FUNCTION_ARCTAN, array(1.0, 0.5, 1.0, 0.5));
    //$image->fxImage('(1.0/(1.0+exp(10.0*(0.5-u)))-0.006693)*1.0092503');
    //$image->gammaImage(4);
    //$image->setCompression(Imagick::COMPRESSION_JPEG);
    //$image->gaussianBlurImage(4, 4);
    //$image->setImage($canvas);
    //$image->resizeImage(200, 200, Imagick::FILTER_HAMMING, 0, true);
    $image->thumbnailImage(200, 100, true);
    //var_dump($image->getCompression());
//var_dump($image->getFont(), $image->getImage());
    //echo $image->getImage();
    //$image->adaptiveBlurImage(5, 3);
    //$image->adaptiveBlurImage(5, 3, Imagick::CHANNEL_RED);
    //$image->adaptiveResizeImage(0, 768);
    //$image->adaptiveResizeImage(100, 100, false);
    //$image->adaptiveResizeImage(200, 200, true);
    //var_dump($image->getImageFormat());
    //$image->adaptiveSharpenImage(2, 1, Imagick::CHANNEL_BLUE);
    //$image->borderImage('red', 10, 10);
    //$image->adaptiveThresholdImage(10, 10, 1);
    //$image->chopImage(200, 200, 0, 0);
    //$image->annotateImage($draw, 10, 45, 0, 'The quick brown fox jumps over the lazy dog');
    //$image->clipImage();
    //$image->colorizeImage('#000078', 0);
    //$image->compositeImage($canvas, Imagick::COMPOSITE_OVER, 30, 40);
    //$image->borderImage('red', 10, 10);
    //$image->borderImage('gold', 5, 5);
    //$image->compositeImage($canvas, Imagick::COMPOSITE_OVER, 180, 190);
    //$image->borderImage('blue', 2, 2);
    //$image->contrastImage(false);
    $image->writeImage($out2);

    $log2[] = $image->getImageFilename();
    $log2[] = $image->getImageFormat();
    $log2[] = $image->getImageHeight();
    $log2[] = $image->getImageWidth();
    $log2[] = $image->getImageDelay();
    $log2[] = implode(', ', $image->getImagePage());


//var_dump($image->getImageGeometry());
//var_dump($image->getImagePage());
//var_dump($image->getVersion());

    //$log2[] = print_r($image, true);

  } else {
    $log2[] = 'offline';
  }

////////////////////////////////////////////////////////////////////////////////

  if (!file_exists($out1)) {
    $out1 = $problem;
  }

  if (!file_exists($out2)) {
    $out2 = $problem;
  }

////////////////////////////////////////////////////////////////////////////////

$result = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="cs" />
    <meta name="author" content="GoodFlow design - Tvorba webových stránek a systémů (www.gfdesign.cz)" />
    <title>Imagic(k) test</title>
  </head>
  <body>
    <div style="float: left;">
      Picture 1: (<strong>Imagic</strong>)<br />
      <img src="'.$out1.'" />
      <pre>'.implode("\n\n", $log1).'</pre>
    </div>
    <div style="float: right;">
      Picture 2: (<em>Imagick</em>)<br />
      <img src="'.$out2.'" />
      <pre>'.implode("\n\n", $log2).'</pre>
    </div>
  </body>
</html>
';

echo $result;

?>




