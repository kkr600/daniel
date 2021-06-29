WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-24 15:57:46

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.1.9
- Server software: Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp
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
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp
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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp.lossy.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png
Dimension: 310 x 273 (with alpha)
Output:    18332 bytes Y-U-V-All-PSNR 43.62 51.79 52.67   45.09 dB
           (1.73 bpp)
block count:  intra4:        231  (64.17%)
              intra16:       129  (35.83%)
              skipped:        67  (18.61%)
bytes used:  header:            205  (1.1%)
             mode-partition:   1059  (5.8%)
             transparency:     9854 (53.6 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    6069 |      45 |     139 |      26 |    6279  (34.3%)
 intra16-coeffs:  |     181 |      75 |      53 |      52 |     361  (2.0%)
  chroma coeffs:  |     509 |       3 |       3 |       6 |     521  (2.8%)
    macroblocks:  |      67%|       4%|       7%|      22%|     360
      quantizer:  |      17 |      12 |       9 |       8 |
   filter level:  |       8 |       3 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6759 |     123 |     195 |      84 |    7161  (39.1%)
Lossless-alpha compressed size: 9853 bytes
  * Header size: 280 bytes, image data size: 9573
  * Lossless features used: PALETTE
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   16

Success
Reduction: 84% (went from 115 kb to 18 kb)

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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\layer-266.png.webp.lossless.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/layer-266.png
Dimension: 310 x 273
Output:    47252 bytes (4.47 bpp)
Lossless-ARGB compressed size: 47252 bytes
  * Header size: 2080 bytes, image data size: 45147
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 60% (went from 115 kb to 46 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1226 ms, reducing file size with 84% (went from 115 kb to 18 kb)
