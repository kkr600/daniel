WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-10 21:00:24

*WebP Convert 2.3.2*  ignited.
- PHP version: 8.0.5
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1k PHP/8.0.5

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/05/papuga-fs8.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp
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
- source: [doc-root]/wp-content/uploads/2021/05/papuga-fs8.png
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp
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
nice cwebp -metadata none -q 85 -alpha_q '80' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/papuga-fs8.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/05/papuga-fs8.png
Dimension: 599 x 734 (with alpha)
Output:    104380 bytes Y-U-V-All-PSNR 41.48 41.54 42.43   41.64 dB
           (1.90 bpp)
block count:  intra4:       1177  (67.33%)
              intra16:       571  (32.67%)
              skipped:       417  (23.86%)
bytes used:  header:            534  (0.5%)
             mode-partition:   7029  (6.7%)
             transparency:     9867 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   34162 |   19821 |   12308 |    1048 |   67339  (64.5%)
 intra16-coeffs:  |       0 |       0 |     162 |     790 |     952  (0.9%)
  chroma coeffs:  |    9863 |    5785 |    2407 |     549 |   18604  (17.8%)
    macroblocks:  |      24%|      19%|      23%|      34%|    1748
      quantizer:  |      20 |      16 |      12 |       8 |
   filter level:  |       7 |       4 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   44025 |   25606 |   14877 |    2387 |   86895  (83.2%)
Lossless-alpha compressed size: 9866 bytes
  * Header size: 277 bytes, image data size: 9589
  * Precision Bits: histogram=4 transform=4 cache=0
  * Palette size:   26

Success
Reduction: 38% (went from 164 kb to 102 kb)

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
nice cwebp -metadata none -q 85 -alpha_q '80' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/05/papuga-fs8.png' -o '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/uploads/2021/05/papuga-fs8.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/05/papuga-fs8.png
Dimension: 599 x 734
Output:    150896 bytes (2.75 bpp)
Lossless-ARGB compressed size: 150896 bytes
  * Header size: 1634 bytes, image data size: 149237
  * Lossless features used: PALETTE
  * Precision Bits: histogram=4 transform=4 cache=3
  * Palette size:   256

Success
Reduction: 10% (went from 164 kb to 147 kb)

Picking lossy
cwebp succeeded :)

Converted image in 877 ms, reducing file size with 38% (went from 164 kb to 102 kb)
