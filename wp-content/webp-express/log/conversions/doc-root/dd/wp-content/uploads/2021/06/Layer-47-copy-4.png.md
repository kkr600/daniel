WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-24 15:55:30

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.1.9
- Server software: Apache/2.4.27 (Win32) OpenSSL/1.0.2l PHP/7.1.9

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp
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
- source: C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png
- destination: C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp
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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp.lossy.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png
Dimension: 472 x 266 (with alpha)
Output:    10216 bytes Y-U-V-All-PSNR 43.69 68.26 75.42   45.45 dB
           (0.65 bpp)
block count:  intra4:        162  (31.76%)
              intra16:       348  (68.24%)
              skipped:       177  (34.71%)
bytes used:  header:            255  (2.5%)
             mode-partition:    888  (8.7%)
             transparency:     1370 (69.2 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5169 |      15 |      62 |      17 |    5263  (51.5%)
 intra16-coeffs:  |     885 |    1095 |     109 |     292 |    2381  (23.3%)
  chroma coeffs:  |       3 |       1 |       0 |       1 |       5  (0.0%)
    macroblocks:  |      58%|      10%|       4%|      28%|     510
      quantizer:  |      18 |      14 |       9 |       8 |
   filter level:  |      63 |       6 |       5 |       9 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6057 |    1111 |     171 |     310 |    7649  (74.9%)
Lossless-alpha compressed size: 1369 bytes
  * Header size: 84 bytes, image data size: 1285
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   92

Success
Reduction: 90% (went from 96 kb to 10 kb)

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
C:\xampp\htdocs\dd\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "80" -near_lossless 60 -m 6 -low_memory "C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png" -o "C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'C:\xampp\htdocs\dd/wp-content/webp-express/webp-images/uploads/2021\06\Layer-47-copy-4.png.webp.lossless.webp'
File:      C:\xampp\htdocs\dd/wp-content/uploads/2021/06/Layer-47-copy-4.png
Dimension: 472 x 266
Output:    35848 bytes (2.28 bpp)
Lossless-ARGB compressed size: 35848 bytes
  * Header size: 978 bytes, image data size: 34844
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=9

Success
Reduction: 64% (went from 96 kb to 35 kb)

Picking lossy
cwebp succeeded :)

Converted image in 850 ms, reducing file size with 90% (went from 96 kb to 10 kb)
