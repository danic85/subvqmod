subvqmod
========

Create VQMod XML files from a Subversion patch file.

This script is written in PHP and, when provided with a valid Subversion patch file, parses the contents and translates it into a VQMod XML change file.

The script finds a unique 'find' anchor point for each change using the patch file, and if necessary, the original code.

All my software is open source, please donate to help keep it free http://dannicholson.co.uk/donate

(4 Feb 2014) This software is in alpha release, please report any issues.

KNOWN ISSUES:
- When a REPLACE operation requires an offset for a unique anchor, the offset does not account for the other lines. This means that the lines between the anchor and the new content are deleted.
- Can't handle multiple replaces in one patch operation