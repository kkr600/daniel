WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-24 17:10:24

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.1.9
- Server software: Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
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
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp.lossy.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg
Dimension: 520 x 218
Output:    9834 bytes Y-U-V-All-PSNR 38.53 44.70 45.01   39.81 dB
           (0.69 bpp)
block count:  intra4:        253  (54.76%)
              intra16:       209  (45.24%)
              skipped:       140  (30.30%)
bytes used:  header:            163  (1.7%)
             mode-partition:   1228  (12.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    7509 |      16 |       9 |      16 |    7550  (76.8%)
 intra16-coeffs:  |      62 |      10 |      11 |      53 |     136  (1.4%)
  chroma coeffs:  |     664 |       7 |      12 |      46 |     729  (7.4%)
    macroblocks:  |      56%|       1%|       3%|      40%|     462
      quantizer:  |      37 |      29 |      21 |      16 |
   filter level:  |      11 |      31 |       4 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    8235 |      33 |      32 |     115 |    8415  (85.6%)

Success
Reduction: 65% (went from 27 kb to 10 kb)

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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-4.jpg.webp.lossless.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-4.jpg
Dimension: 520 x 218
Output:    45672 bytes (3.22 bpp)
Lossless-ARGB compressed size: 45672 bytes
  * Header size: 2309 bytes, image data size: 43337
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: -65% (went from 27 kb to 45 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1303 ms, reducing file size with 65% (went from 27 kb to 10 kb)
