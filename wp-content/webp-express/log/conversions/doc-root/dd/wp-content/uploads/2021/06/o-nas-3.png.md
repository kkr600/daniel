WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-24 18:20:26

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.1.9
- Server software: Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp
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
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp
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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp.lossy.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png
Dimension: 952 x 438
Output:    37824 bytes Y-U-V-All-PSNR 43.75 47.09 48.42   44.71 dB
           (0.73 bpp)
block count:  intra4:       1248  (74.29%)
              intra16:       432  (25.71%)
              skipped:        83  (4.94%)
bytes used:  header:            214  (0.6%)
             mode-partition:   5816  (15.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   22431 |    1177 |     974 |     374 |   24956  (66.0%)
 intra16-coeffs:  |    1516 |     125 |     104 |     252 |    1997  (5.3%)
  chroma coeffs:  |    4070 |     202 |     303 |     237 |    4812  (12.7%)
    macroblocks:  |      69%|       7%|       8%|      17%|    1680
      quantizer:  |      17 |      12 |       8 |       8 |
   filter level:  |      32 |       3 |       2 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   28017 |    1504 |    1381 |     863 |   31765  (84.0%)

Success
Reduction: 92% (went from 436 kb to 37 kb)

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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\o-nas-3.png.webp.lossless.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/o-nas-3.png
Dimension: 952 x 438
Output:    196588 bytes (3.77 bpp)
Lossless-ARGB compressed size: 196588 bytes
  * Header size: 3500 bytes, image data size: 193062
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: 56% (went from 436 kb to 192 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2038 ms, reducing file size with 92% (went from 436 kb to 37 kb)
