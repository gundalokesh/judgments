<?php
include "database.php";

$sql = "SELECT * FROM categories";
$result = $connection->query($sql);
$categories = [];
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $categories[$row["type"]][] = $row["name"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
    <style>

* {
  margin: 0;
  padding: 0;
  /* box-sizing: border-box; */
}




.form-fields{
    display: flex;
    justify-content:space-evenly;
    margin-top: 30px;
   
}
.field{
    display: flex;
    flex-direction: column;
   
}
#submit{
margin-left: 50%;
color: white !important;



}

table{
   margin: 0 auto;

}
th{
   
    border: 1px solid gray;

}
.txtarea{
    margin-left: 20%;
    width: 800px;
    
   
}
a{
  color:white;
  text-decoration:none;
}

  
body{
    /* background: #E3F2FD; */
}

#Category1,#Category2,#Category3{
  width: 182px;
 
}

/* 
body {
            max-width: 1200px;
            padding: 0 20px;
            margin: 20px auto;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            overflow-y: scroll;
        } */
        /* Set the minimum height of Classic editor */
        .ck.ck-editor__editable_inline:not(.ck-editor__nested-editable) {
            min-height: 200px;
        }
        /* Styles to render an editor with a sidebar for comments & suggestions */
        .container {
            display: flex;
            flex-direction: row;
        }
        .ck.ck-presence-list.ck-reset.ck-rounded-corners {
    display: none;
}
        .document-outline-container {
            background-color: #f3f7fb;
            width: 200px;
            display: none;
        }
        .sidebar {
            width: 320px;
        }
        #editor-container .ck.ck-editor {
            width: 860px;
        }
        #editor-container .sidebar {
            margin-left: 20px;
        }
        #editor-container .sidebar.narrow {
            width: 30px;
        }
        /* Keep the automatic height of the editor for adding comments */
        .ck-annotation-wrapper .ck.ck-editor__editable_inline {
            min-height: auto;
        }
        /* Styles for viewing revision history */
        #revision-viewer-container {
            display: none;
        }
        #revision-viewer-container .ck.ck-editor {
            width: 860px;
        }
        #revision-viewer-container .ck.ck-content {
            min-height: 400px;
        }
        #revision-viewer-container .sidebar {
            border: 1px #c4c4c4 solid;
            margin-left: -1px;
            width: 320px;
        }
        #revision-viewer-container .ck.ck-revision-history-sidebar__header {
            height: 39px;
            background: #FAFAFA;
        }
        .hidden {
            display: none!important;
        }
  
        </style>
  </head>

  <body>
  
        
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Top navbar</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li> -->
        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Judgment
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="addjudgement.php">Add Judgment</a></li>
                <!-- <li><a class="dropdown-item" href="judgements.php">List of Judgement</a></li> -->
                <li><a class="dropdown-item" href="searchjudgments.php">Search judgements</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="addcategories.php">Add categories</a></li>
                <li><a class="dropdown-item" href="categories.php">List categories</a></li>
              </ul>
            </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" name="filter_value" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success " class="search" name="filter_btn" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>
 
  

<p style="color:red">
  <!-- <?php if (!empty($msg)) {
    echo $msg;
} 
?> -->
</p>

    <form action="savejudgement.php" method="POST" enctype="multipart/form-data">
      
      <div class="form-fields">
        <!-- <div class="field">
          <label>Judgement Number</label>
          <input type="text" id="JudgementNumber" name="judgement_number"/>
        </div> -->
        <div class="field">
          <label>Citations</label>
          <input type="text" id="Citations" name='citations'/>
        </div>

        <div class="field">
          <label>Name of Court</label>
          <input type="text" id="NameofCourt" name='name_of_court' />
        </div>
        <div class="field">
          <label>Name of Judges</label>
          <input type="text" id="NameofJudges" name='name_of_judges'/>
        </div>
      </div>
     


      <div class="form-fields">
        <div class="field">
          <label>Number of Judges</label>
          <input type="text" id="NumberofJudges" name=' number_of_judges'/>
        </div>
        <div class="field">
          <label>Judgment Date</label>
          <input type="text" id="JudgmentDate" name=' judgement_date'/>
        </div>
        <div class="field">
          <label>Nature of Case</label>
          <input type="text" id="NatureofCase" name='nature_of_case'/>
        </div>
      </div>


      <div class="form-fields">
        <div class="field">
          <label>Appellant Name</label>
          <input type="text" id="AppellantName" name='appellant_name'/>
        </div>
        <div class="field">
          <label>Respondent Name</label>
          <input type="text" id="RespondentName" name='respondent_name'/>
        </div>
        <div class="field">
          <label>Rank of Judgement</label>
          <input type="text" id="RankofJudgement" name='rank_of_judgement'/>
        </div>
      </div>



      <div class="form-fields">
        <div class="field">
          <label>Category 1 :</label>
          <select id="Category1" name='category1'>
          <option>Select</option>
          <?php foreach ($categories["type1"] as $name) { ?>
            <option><?php echo $name; ?></option>
          <?php } ?>
          </select>
        </div>
        
        <div class="field">
          <label>Category 2 :</label>
          <select  id="Category2" name='category2'>
          <option>Select</option>
          <?php foreach ($categories["type2"] as $name) { ?>
          <option><?php echo $name; ?></option>
        <?php } ?>
          </select>
        </div>

        <div class="field">
          <label>Category 3 :</label>
         
          <select id="Category3" name='category3' >
          <option>Select</option>
          <?php foreach ($categories["type3"] as $name) { ?>
          <option><?php echo $name; ?></option>
        <?php } ?>
          </select>
        </div>
      </div>

<!-- </div> -->
            <div class="form-fields1">

            </div>

            <div class="txtarea mt-4">
              <p>Description : -</P>
              

              <!-- <textarea  name="content" id="editor" rows="10" cols="80"></textarea> -->
              <!-- <h1>CKEditor 5 – premium features sample</h1> -->

<!-- Use simpler CSS and HTML structure if you do not want to integrate i.e. the Revision history feature. !-->
<div id="presence-list-container"></div>

<div id="editor-container" name="content">
    <div class="container">
        <div id="outline" class="document-outline-container"></div>
        <div id="editor"></div>
        <div class="sidebar" id="sidebar"></div>
    </div>
</div>

<div id="revision-viewer-container" name="content">
    <div class="container">
        <div id="revision-viewer-editor"></div>
        <div class="sidebar" id="revision-viewer-sidebar"></div>
    </div>
</div>

<!--
	https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/ckbox.html
-->
<script src="https://cdn.ckbox.io/CKBox/1.5.0/ckbox.js"></script>
<!--
	The "super-build" of CKEditor 5 served via CDN contains a large set of plugins and multiple editor types.
	See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
-->
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
<!--
	Uncomment to load the Spanish translation
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/translations/es.js"></script>
-->
<script>
    // This sample still does not showcase all CKEditor 5 features (!)
    // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    CKEDITOR.ClassicEditor.create( document.querySelector( '#editor' ), {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
            items: [
                'ckbox', 'uploadImage', '|',
                'exportPDF','exportWord', '|',
                'comment', 'trackChanges', 'revisionHistory', '|',
                'findAndReplace', 'selectAll', 'formatPainter', '|',
                'undo', 'redo',
                '-',
                'bold', 'italic', 'strikethrough', 'underline', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'alignment', '|',
                '-',
                'heading', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', 'tableOfContents', 'insertTemplate', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                // Intentionally skipped buttons to keep the toolbar smaller, feel free to enable them:
                // 'code', 'subscript', 'superscript', 'textPartLanguage', '|',
                // ** To use source editing remember to disable real-time collaboration plugins **
                // 'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        // Changing the language of the interface requires loading the language file using the <script> tag.
        // language: 'es',
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
        fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
        },
        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
        // htmlSupport: {
        // 	allow: [
        // 		{
        // 			name: /.*/,
        // 			attributes: true,
        // 			classes: true,
        // 			styles: true
        // 		}
        // 	]
        // },
        // Be careful with enabling previews
        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
        htmlEmbed: {
            showPreviews: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        template: {
            definitions: [
                {
                    title: 'The title of the template',
                    description: 'A longer description of the template',
                    data: '<p>Data inserted into the content</p>'
                },
                {
                    title: 'Annual financial report',
                    description: 'A report that spells out the company\'s financial condition.',
                    data: `<figure class="table">
						<table style="border:2px solid hsl(0, 0%, 0%);">
							<thead>
								<tr>
									<th style="text-align:center;" rowspan="2">Metric name</th>
									<th style="text-align:center;" colspan="4">Year</th>
								</tr>
								<tr>
									<th style="background-color:hsl(90, 75%, 60%);text-align:center;">2019</th>
									<th style="background-color:hsl(90, 75%, 60%);text-align:center;">2020</th>
									<th style="background-color:hsl(90, 75%, 60%);text-align:center;">2021</th>
									<th style="background-color:hsl(90, 75%, 60%);text-align:center;">2022</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th><strong>Revenue</strong></th>
									<td>$100,000.00</td>
									<td>$120,000.00</td>
									<td>$130,000.00</td>
									<td>$180,000.00</td>
								</tr>
								<tr>
									<th style="background-color:hsl(0, 0%, 90%);"><strong>Operating expenses</strong></th>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<th><strong>Interest</strong></th>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<th style="background-color:hsl(0, 0%, 90%);"><strong>Net profit</strong></th>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</figure>`
                },
            ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
        placeholder: 'Welcome to CKEditor 5!',
        // Used by real-time collaboration
        cloudServices: {
            // Be careful - do not use the development token endpoint on production systems!
            tokenUrl: 'https://97908.cke-cs.com/token/dev/z3JxhCoZuPWpzxygWc4znC8b3MimcgxZa4HU?limit=10',
            webSocketUrl: 'wss://97908.cke-cs.com/ws'
        },
        collaboration: {
            // Modify the channelId to simulate editing different documents
            // https://ckeditor.com/docs/ckeditor5/latest/features/collaboration/real-time-collaboration/real-time-collaboration-integration.html#the-channelid-configuration-property
            channelId: 'document-id-4'
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/collaboration/annotations/annotations-custom-configuration.html#sidebar-configuration
        sidebar: {
            container: document.querySelector( '#sidebar' )
        },
        documentOutline: {
            container: document.querySelector( '#outline')
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/collaboration/real-time-collaboration/users-in-real-time-collaboration.html#users-presence-list
        presenceList: {
            container: document.querySelector( '#presence-list-container' )
        },
        // Add configuration for the comments editor if the Comments plugin is added.
        // https://ckeditor.com/docs/ckeditor5/latest/features/collaboration/annotations/annotations-custom-configuration.html#comment-editor-configuration
        comments: {
            editorConfig: {
                extraPlugins: CKEDITOR.ClassicEditor.builtinPlugins.filter( plugin => {
                    // Use e.g. Ctrl+B in the comments editor to bold text.
                    return [ 'Bold', 'Italic', 'Underline', 'List', 'Autoformat', 'Mention' ].includes( plugin.pluginName );
                } ),
                // Combine mentions + Webhooks to notify users about new comments
                // https://ckeditor.com/docs/cs/latest/guides/webhooks/events.html
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@Baby Doe', '@Joe Doe', '@Jane Doe', '@Jane Roe', '@Richard Roe'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
            }
        },
        // Do not include revision history configuration if you do not want to integrate it.
        // Remember to remove the 'revisionHistory' button from the toolbar in such a case.
        revisionHistory: {
            editorContainer: document.querySelector( '#editor-container' ),
            viewerContainer: document.querySelector( '#revision-viewer-container' ),
            viewerEditorElement: document.querySelector( '#revision-viewer-editor' ),
            viewerSidebarContainer: document.querySelector( '#revision-viewer-sidebar' ),
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/ckbox.html
        ckbox: {
            // Be careful - do not use the development token endpoint on production systems!
            tokenUrl: 'https://97908.cke-cs.com/token/dev/z3JxhCoZuPWpzxygWc4znC8b3MimcgxZa4HU?limit=10'
        },
        // License key is required only by the Pagination plugin and non-realtime Comments/Track changes.
        licenseKey: 'TTSZGBiOCRMFAtINFjSWtLtskfCyx3qeJwSe+N/kxVpN/Gb63vX22ua5ZUw=',
        removePlugins: [
            // Before enabling Pagination plugin, make sure to provide proper configuration and add relevant buttons to the toolbar
            // https://ckeditor.com/docs/ckeditor5/latest/features/pagination/pagination.html
            'Pagination',
            // Intentionally disabled, file uploads are handled by CKBox
            'Base64UploadAdapter',
            // Intentionally disabled, file uploads are handled by CKBox
            'CKFinder',
            // Intentionally disabled, file uploads are handled by CKBox
            'EasyImage',
            // Requires additional license key
            'WProofreader',
            // Incompatible with real-time collaboration
            'SourceEditing',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType
            'MathType'
            // If you would like to adjust enabled collaboration features:
            // 'RealTimeCollaborativeComments',
            // 'RealTimeCollaborativeTrackChanges',
            // 'RealTimeCollaborativeRevisionHistory',
            // 'PresenceList',
            // 'Comments',
            // 'TrackChanges',
            // 'TrackChangesData',
            // 'RevisionHistory',
        ]
    } )
        .then( editor => {
            window.editor = editor;

            // Example implementation to switch between different types of annotations according to the window size.
            // https://ckeditor.com/docs/ckeditor5/latest/features/collaboration/annotations/annotations-display-mode.html
            const annotationsUIs = editor.plugins.get( 'AnnotationsUIs' );
            const sidebarElement = document.querySelector( '.sidebar' );
            let currentWidth;

            function refreshDisplayMode() {
                // Check the window width to avoid the UI switching when the mobile keyboard shows up.
                if ( window.innerWidth === currentWidth ) {
                    return;
                }
                currentWidth = window.innerWidth;

                if ( currentWidth < 1000 ) {
                    sidebarElement.classList.remove( 'narrow' );
                    sidebarElement.classList.add( 'hidden' );
                    annotationsUIs.switchTo( 'inline' );
                }
                else if ( currentWidth < 1300 ) {
                    sidebarElement.classList.remove( 'hidden' );
                    sidebarElement.classList.add( 'narrow' );
                    annotationsUIs.switchTo( 'narrowSidebar' );
                }
                else {
                    sidebarElement.classList.remove( 'hidden', 'narrow' );
                    annotationsUIs.switchTo( 'wideSidebar' );
                }
            }

            editor.ui.view.listenTo( window, 'resize', refreshDisplayMode );
            refreshDisplayMode();

            return editor;
        } )
        .catch( error => {
            console.error( 'There was a problem initializing the editor.', error );
        } );
</script>
            </div>



          <div class="form-fields">
      
            <div class="field">
              <label for="upload">Upload </label>
              <input type="file" id="formFile" id="Upload" name='upload[]' multiple/>
            </div>
            <div class="field">

          

            </div>
          </div>
  
        <button type="submit " id="submit" class="btn btn-primary mt-4 " >
        Submit 
        </button>
      

   
     
    </form>
  </body>
</html>
