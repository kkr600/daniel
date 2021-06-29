WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-10 21:00:20

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.5
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1k PHP/8.0.5

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp
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
- source: [doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp
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
nice cwebp -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png
Dimension: 935 x 481 (with alpha)
Output:    57278 bytes Y-U-V-All-PSNR 42.97 45.17 45.07   43.58 dB
           (1.02 bpp)
block count:  intra4:        819  (44.78%)
              intra16:      1010  (55.22%)
              skipped:       517  (28.27%)
bytes used:  header:            497  (0.9%)
             mode-partition:   4693  (8.2%)
             transparency:    10302 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5616 |   10080 |    9647 |     935 |   26278  (45.9%)
 intra16-coeffs:  |       0 |     449 |    2838 |    1327 |    4614  (8.1%)
  chroma coeffs:  |    2483 |    4155 |    3418 |     784 |   10840  (18.9%)
    macroblocks:  |       5%|      15%|      35%|      45%|    1829
      quantizer:  |      20 |      18 |      14 |      11 |
   filter level:  |       7 |       4 |      10 |      14 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    8099 |   14684 |   15903 |    3046 |   41732  (72.9%)
Lossless-alpha compressed size: 10301 bytes
  * Header size: 272 bytes, image data size: 10029
  * Lossless features used: PALETTE
  * Precision Bits: histogram=4 transform=4 cache=0
  * Palette size:   49

Success
Reduction: 46% (went from 104 kb to 56 kb)

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
nice cwebp -metadata none -q 85 -alpha_q '80' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/druki-wieloformatowe-fs8.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/05/druki-wieloformatowe-fs8.png
Dimension: 935 x 481
Output:    91734 bytes (1.63 bpp)
Lossless-ARGB compressed size: 91734 bytes
  * Header size: 1484 bytes, image data size: 90224
  * Lossless features used: PALETTE
  * Precision Bits: histogram=4 transform=4 cache=3
  * Palette size:   256

Success
Reduction: 14% (went from 104 kb to 90 kb)

Picking lossy
cwebp succeeded :)

Converted image in 816 ms, reducing file size with 46% (went from 104 kb to 56 kb)
