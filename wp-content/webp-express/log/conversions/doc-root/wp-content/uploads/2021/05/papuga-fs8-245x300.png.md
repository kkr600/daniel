WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-10 21:00:25

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.5
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1k PHP/8.0.5

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp
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
- source: [doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp
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
- Executing: cwebp -version 2>&1. Result: version: *1.2.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.2.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *1.2.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 1.2.0)
- /usr/bin/cwebp: (version: 1.2.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.2.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png
Dimension: 245 x 300 (with alpha)
Output:    27422 bytes Y-U-V-All-PSNR 41.31 40.80 41.65   41.27 dB
           (2.98 bpp)
block count:  intra4:        257  (84.54%)
              intra16:        47  (15.46%)
              skipped:        44  (14.47%)
bytes used:  header:            367  (1.3%)
             mode-partition:   1366  (5.0%)
             transparency:     6308 (58.3 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    8948 |    3379 |    3018 |     287 |   15632  (57.0%)
 intra16-coeffs:  |       0 |       0 |      40 |     117 |     157  (0.6%)
  chroma coeffs:  |    2373 |     871 |     263 |      30 |    3537  (12.9%)
    macroblocks:  |      33%|      16%|      23%|      27%|     304
      quantizer:  |      19 |      15 |      11 |       8 |
   filter level:  |       5 |       3 |       2 |       9 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   11321 |    4250 |    3321 |     434 |   19326  (70.5%)
Lossless-alpha compressed size: 6307 bytes
  * Header size: 213 bytes, image data size: 6094
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   96

Success
Reduction: 79% (went from 127 kb to 27 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *1.2.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *1.2.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *1.2.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "http" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 1.2.0)
- /usr/bin/cwebp: (version: 1.2.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.2.0
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '80' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8-245x300.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/05/papuga-fs8-245x300.png
Dimension: 245 x 300
Output:    70504 bytes (7.67 bpp)
Lossless-ARGB compressed size: 70504 bytes
  * Header size: 2584 bytes, image data size: 67894
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 46% (went from 127 kb to 69 kb)

Picking lossy
cwebp succeeded :)

Converted image in 696 ms, reducing file size with 79% (went from 127 kb to 27 kb)
