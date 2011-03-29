NSM Publish Hints 1.0.1
=======================

Overview
--------

NSM Publish Hints is an [ExpressionEngine 2][ee2] custom field that allows you to add publishing hints to a channel. Out of the box functionality allows you to add per field instructions but these can't be hidden and can take up a lot of room.

NSM Publish Hints addresses this issue by displaying hints for each field in a single box that can be hidden by default using standard custom field settings.

Looking for an EE1 version? Try [Dulee Noted](http://masugadesign.com/the-lab/scripts/dulee-noted/) by Ryan Masuga which is the base concept of NSM Publish Hints

### Screenshots

[![Publishing Hints](http://s3.amazonaws.com/ember/3WWeUmNdPzj0KI7T50fZrdIlSo4SbjPW_s.jpg)<br />Publishing Hints](http://emberapp.com/leevigraham/images/nsm-publish-hints/)


Getting started
-------------

### Requirements

NSM Publish Hints requires ExpressionEngine 2+. Addon update notifications require [NSM Addon Updater][nsm_addon_updater].

Technical requirements include:

* PHP5
* A modern browser: [Firefox][firefox], [Safari][safari], [Google Chrome][chrome] or IE8+

### Installation

1. Download the latest version of NSM Publish Hints
2. Extract the .zip file to your desktop
3. Rename the file to `nsm_publish_hints`
4. Move the folder to `/system/expressionengine/third_party/`
5. Move `/system/expressionengine/third_party/nsm_publish_hints/themes/third_party/nsm_publish_hints` to `/system/themes/third_party`. You may need to create the folder.

### Activation

1. Open the [Custom Field Manager][ee_custom_field_manager]
2. Enable the custom field

### Usage

1. Create a new custom field in a custom field group
2. Set the field type as "NSM Publish Hints"
3. Enter the publishing hints in the _field instructions_
4. Save the field and assign the custom field group to a channel.
5. Publish / Edit an entry.

Support
-------

Technical support is available primarily through the [ExpressionEngine forums][ee_forums]. [Leevi Graham][lg] and [Newism][newism] do not provide direct phone support. No representations or guarantees are made regarding the response time in which support questions are answered.

Although we are actively developing this addon, [Leevi Graham][lg] and [Newism][newism] makes no guarantees that it will be upgraded within any specific timeframe.

License
------

Ownership of this software always remains property of the author.

You may:

* Modify the software for your own projects
* Use the software on personal and commercial projects

You may not:

* Resell or redistribute the software in any form or manner without permission of the author
* Remove the license / copyright / author credits

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

[lg]: http://leevigraham.com

[nsm]: http://newism.com.au
[nsm_publish_plus]: http://leevigraham.com/cms-customisation/expressionengine/nsm-publish-plus/

[ee]: http://expressionengine.com/index.php?affiliate=newism
[ee2]: http://expressionengine.com/index.php?affiliate=newism&page=public_beta
[ee_forums]: http://expressionengine.com/index.php?affiliate=newism&page=forums
[ee_cp]: http://expressionengine.com/index.php?affiliate=newism&page=docs/cp/index.html
[ee_cp_edit]: http://expressionengine.com/index.php?affiliate=newism&page=docs/cp/edit/index.html
[ee_cp_extensions_manager]: http://expressionengine.com/index.php?affiliate=newism&page=docs/cp/admin/utilities/extension_manager.html
[ee_custom_field_manager]: http://expressionengine.com/index.php?affiliate=newism&page=public_beta/docs/cp/add-ons/custom_field_manager.html
[ee_msm]: http://expressionengine.com/index.php?affiliate=newism&page=downloads/details/multiple_site_manager/

[firefox]: http://firefox.com
[safari]: http://www.apple.com/safari/download/
[chrome]: http://www.google.com/chrome/

[lg_addon_updater]: http://leevigraham.com/cms-customisation/expressionengine/lg-addon-updater/
[nsm_addon_updater]: http://github.com/newism/nsm.addon_updater.ee_addon
[gh_morphine_theme]: http://github.com/newism/nsm.morphine.theme