<?php
require_once 'session.php';
require_once 'shared.php';
require_once 'header.php';
?>

<p>Workbench is a powerful, web-based suite of tools designed for
adminstrators and developers to interact with Salesforce.com
organizations via the Force.com APIs. Workbench includes robust support
for the Force.com Partner, Bulk, Rest, Streaming, Metadata, and Apex APIs that allows
users to describe, query, manipulate, and migrate both data and metadata
in Salesforce.com organizations directly in their web browser with a
simple and intuitive user interface. Workbench also provides many
advanced features for testing and troubleshooting the Force.com APIs,
such as customizable SOAP headers, debug logs for API traffic, backward
compatibility testing with previous API versions, and single sign-on
integration within the Salesforce application.</p>

<p><strong> Workbench <?php echo $GLOBALS['WORKBENCH_VERSION']; ?><br />
</strong> Distributed under the Open Source BSD License.<br />
Developed by Ryan Brainard<br />
</p>
<p>Workbench is NOT a product of or supported by salesforce.com, inc.
For support from the open source community, please visit the recources
below:</p>
<ul>
    <li><a href="http://wiki.apexdevnet.com/index.php/Workbench"
        target="_blank">Main Page</a></li>
    <li><a href="http://wiki.apexdevnet.com/index.php/Workbench#FAQ"
        target="_blank">FAQ</a></li>
    <li><a href="http://groups.google.com/group/forceworkbench"
        target="_blank">Feedback &amp; Discussion</a></li>
    <li><a href="http://code.google.com/p/forceworkbench/"
        target="_blank">Development</a></li>
    <li><a href="http://code.google.com/p/forceworkbench/issues/list"
        target="_blank">Report an Issue</a></li>
    <li><a href="http://code.google.com/p/forceworkbench/source/browse"
        target="_blank">Source Code</a></li>
    <li><a href="http://code.google.com/p/forceworkbench/downloads/list"
        target="_blank">Download</a></li>
</ul>


<p><strong> THIS APPLICATION IS STILL IN ACTIVE DEVELOPMENT AND HAS NOT
UNDERGONE COMPLETE QUALITY ASSURANCE TESTING. DO NOT USE WITH PRODUCTION
DATA. THIS APPLICATION IS PROVIDED 'AS IS' AND THE USER ASSUMES ALL
RISKS ASSOCIATED WITH ITS USE. MAY CONTAIN PEANUTS, SOY, OR WHEAT
PRODUCTS. </strong></p>

<hr />

<p>Partner API support in Workbench is based on the Salesforce.com PHP
Toolkit, but Workbench itself is not a product of salesforce.com, inc.
and is not supported by salesforce.com, inc or its contributors. Below
is the copyright and license for the PHP Toolkit:</p>

<p>Copyright (c) 2008, salesforce.com, inc.<br />
All rights reserved.</p>
<p>Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are
met:</p>
<ul>
    <li>Redistributions of source code must retain the above copyright
    notice, this list of conditions and the following disclaimer.</li>

    <li>Redistributions in binary form must reproduce the above
    copyright notice, this list of conditions and the following
    disclaimer in the documentation and/or other materials provided with
    the distribution.</li>

    <li>Neither the name of salesforce.com, inc. nor the names of its
    contributors may be used to endorse or promote products derived from
    this software without specific prior written permission.</li>
</ul>
<p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A
PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER
OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>

<hr />
<p>Collapsible tree JavaScript on Describe page is built on <a
    href="http://www.dynamicdrive.com/dynamicindex1/navigate1.htm">Simple
Tree Menu</a> framework from <a href="http://www.dynamicdrive.com">Dynamic
Drive DHTML code library</a></p>


<hr />
<p>Menu bar tool JavaScript tips is built on <a
    href="http://www.walterzorn.com/tooltip/tooltip_e.htm">JavaScript,
DHTML Tooltips </a> framework from <a href="http://www.walterzorn.com/">Walter
Zorn</a></p>

<hr />
<p><a href="http://yoast.com/articles/sortable-table/">Sortable table</a>
JavaScript built on a framework from <a href="http://www.kryogenix.org">Stuart
Langridge</a></p>

<hr />
<p>Drop-down menus built with <a
    href="http://www.stunicholls.com/menu/pro_drop_2.html">Professional
Dropdown #2</a> from Stu Nicholls</p>

<?php
include_once 'footer.php';
?>
