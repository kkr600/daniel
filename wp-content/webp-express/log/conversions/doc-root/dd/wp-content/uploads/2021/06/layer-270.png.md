WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-24 15:56:35

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.1.9
- Server software: Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 80
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp
- alpha-quality: 80
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp.lossy.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png
Dimension: 474 x 243 (with alpha)
Output:    35198 bytes Y-U-V-All-PSNR 42.36 44.86 45.94   43.15 dB
           (2.44 bpp)
block count:  intra4:        369  (76.88%)
              intra16:       111  (23.13%)
              skipped:        73  (15.21%)
bytes used:  header:            446  (1.3%)
             mode-partition:   1893  (5.4%)
             transparency:     6382 (63.4 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   22034 |      21 |      36 |       0 |   22091  (62.8%)
 intra16-coeffs:  |     648 |       3 |       9 |       0 |     660  (1.9%)
  chroma coeffs:  |    3653 |       4 |      14 |       0 |    3671  (10.4%)
    macroblocks:  |      89%|       1%|      10%|       0%|     480
      quantizer:  |      15 |      11 |       8 |       8 |
   filter level:  |       4 |       2 |       0 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   26335 |      28 |      59 |       0 |   26422  (75.1%)
Lossless-alpha compressed size: 6381 bytes
  * Header size: 67 bytes, image data size: 6314
  * Lossless features used: PALETTE
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   96

Success
Reduction: 83% (went from 208 kb to 34 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-270.png.webp.lossless.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-270.png
Dimension: 474 x 243
Output:    83692 bytes (5.81 bpp)
Lossless-ARGB compressed size: 83692 bytes
  * Header size: 2981 bytes, image data size: 80685
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 61% (went from 208 kb to 82 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1094 ms, reducing file size with 83% (went from 208 kb to 34 kb)
