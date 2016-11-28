<!DOCTYPE html>
<html>
<head>
  <title>View Dataset</title>
<?php include 'header.php'; ?>

<script>
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
    $("#author-name").value(profile.getName());
}
</script>
</head>
  <body>
    <?php include "nav.php"; ?>
    <main>
      <div class="wrapper">
        <div class="header-row">
          <h5 id="dataset-title" class="header center teal-text text-lighten-2">Manifest</h5>
          <a id="edit-button" class="waves-effect waves-light btn-flat"><i class="material-icons left">mode_edit</i>Edit</a>
          <a id="cancel-button" class="waves-effect waves-light btn-flat"><i class="material-icons left">delete</i>Cancel</a>
        </div>
        <div class="row">
          <form class="col s12">
            <div class="row view-section">
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="standardVersion" type="text">
                  <label class="active" for="standardVersion">Standard Version</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="id" type="text">
                  <label class="active" for="id">ID</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="creator" type="text">
                  <label class="active" for="creator">Creator</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="dateCreated" type="text">
                  <label class="active" for="dateCreated">Date Created</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="comment" type="text">
                  <label class="active" for="comment">Comment</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="row view-section">
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="title" type="text">
                  <label class="active" for="title">Title</label>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <textarea id="abstract" class="materialize-textarea"></textarea>
                  <label for="abstract">Abstract</label>
                </div>
              </div>
              <div class="date-placeholder">
              </div>
              <div class="col s12 l6 clear">
                <div class="input-field">
                  <input id="oversight" type="text">
                  <label class="active" for="oversight">Privacy Ethics - Oversight</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="informedConsent" type="text">
                  <label class="active" for="InformedConsent">Informed Consent</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="anonymizedData" type="text">
                  <label class="active" for="anonymizedData">Anonymized Data</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="privacyConsiderations" type="text">
                  <label class="active" for="privacyConsiderations">Privacy Considerations</label>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="row view-section">
              <div class="col s12">
                <div class="input-field">
                  <textarea id="narrative" class="materialize-textarea"></textarea>
                  <label for="narrative">Narrative</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="publication" type="text">
                  <label class="active" for="publication">Publication</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="locationUrl" type="text">
                  <label class="active" for="locationUrl">Location URL</label>
                </div>
              </div>
              <div class="col s12 l6">
                <div class="input-field">
                  <input id="locationComment" type="text">
                  <label class="active" for="locationComment">Location Comment</label>
                </div>
              </div>
            </div>

<!--
            <div class="row">
              <div class="col s12 l6">
                <div id="size-tester" class="input-field">
                  <input id="standardVersion" type="text">
                  <label class="active" for="standardVersion">Standard Version</label>
                </div>
                <div class="input-field">
                  <input id="id" type="text">
                  <label class="active" for="id">ID</label>
                </div>
                <div class="input-field">
                  <input id="creator" type="text">
                  <label class="active" for="creator">Creator</label>
                </div>
                <div class="input-field">
                  <input id="dateCreated" type="text">
                  <label class="active" for="dateCreated">Date Created</label>
                </div>
                <div class="input-field">
                  <input id="comment" type="text">
                  <label class="active" for="comment">Comment</label>
                </div>
                <div class="input-field">
                  <input id="title" type="text">
                  <label class="active" for="title">Title</label>
                </div>
                <div class="input-field flex-display">
                  <textarea id="abstract" class="materialize-textarea"></textarea>
                  <label for="abstract">Abstract</label>
                </div>
              </div>
              <div class="col s12 l6">                
                <div class="row date-placeholder">
                </div>
                <div class="input-field">
                  <input id="oversight" type="text">
                  <label class="active" for="title">Privacy Ethics - Oversight</label>
                </div>
                <div class="input-field">
                  <input id="informedConsent" type="text">
                  <label class="active" for="title">Informed Consent</label>
                </div>
                <div class="input-field">
                  <input id="anonymizedData" type="text">
                  <label class="active" for="title">Anonymized Data</label>
                </div>
                <div class="input-field">
                  <input id="privacyConsiderations" type="text">
                  <label class="active" for="title">Privacy Considerations</label>
                </div>
                <div class="input-field">
                  <input id="narrative" type="text">
                  <label class="active" for="title">Narrative</label>
                </div>
                <div class="input-field">
                  <input id="publication" type="text">
                  <label class="active" for="title">Publication</label>
                </div>
              </div>
            </div>
-->
<!--
            <div class="label-wrapper">
              <div class="row"><label class="edit-label">Standard Versions:</label></div>
              <div class="row"><label class="edit-label">ID:</label></div>
              <div class="row"><label class="edit-label">Creator:</label></div>
              <div class="row"><label class="edit-label">Date Created:</label></div>
              <div class="row"><label class="edit-label">Comment:</label></div>
              <div class="row"><label class="edit-label">Title:</label></div>
              <div class="row"><label class="edit-label">Abstract:</label></div>
              <div class="date-placeholder"></div>
              <div class="row"><label class="edit-label">Oversight:</label></div>
              <div class="row"><label class="edit-label">Informed Consent:</label></div>
              <div class="row"><label class="edit-label">Anonymized Data:</label></div>
              <div class="row"><label class="edit-label">Privacy Considerations:</label></div>
              <div class="row"><label class="edit-label">Narrative:</label></div>
              <div class="row"><label class="edit-label">Publication:</label></div>
              <div class="row"><label class="edit-label">Locations URL:</label></div>
              <div class="row"><label class="edit-label">Locations Comment:</label></div>
            </div>
            <div class="input-wrapper">
              <div class="row"><span class="edit-span"><input id="standardVersion" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="id" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="creator" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="dateCreated" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="comment" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="title" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="abstract" class="edit-input edit-field" readonly/></span></div>
              <div class="date-placeholder"></div>
              <div class="row"><span class="edit-span"><input id="oversight" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="informedConsent" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="anonymizedData" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="privacyConsiderations" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="narrative" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="publication" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="locationUrl" class="edit-input edit-field" readonly/></span></div>
              <div class="row"><span class="edit-span"><input id="locationComment" class="edit-input edit-field" readonly/></span></div>
            </div>
-->
            <div class="files-wrapper">
              <label>Files</label>
              <div class="files-table-wrapper">
                <table class="bordered">
                  <thead>
                    <tr>
                      <th data-field="file_title">Title</th>
                      <th data-field="file_abstract">Abstract</th>
                      <th data-field="file_size">Size</th>
                      <th data-field="file_url">URL</th>
                      <th data-field="file_checksum">Checksum</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>iDAS - data.csv</td>
                      <td>Metadata for 5000 records collected</td>
                      <td>4 KB</td>
                      <td>No assertion</td>
                      <td>No assertion</td>
                    </tr>
                    <tr>
                      <td>Socially Compute - sc.csv</td>
                      <td>Metadata for 15000 records collected over two decades</td>
                      <td>624 Bytes</td>
                      <td>No assertion</td>
                      <td>No assertion</td>
                    </tr>
                    <tr>
                      <td>More - data.csv</td>
                      <td>Metadata for 10000 records</td>
                      <td>6 KB</td>
                      <td>No assertion</td>
                      <td>No assertion</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="contributors-wrapper">
              <div class="label-wrapper">
                <div class="row"><label class="edit-label">Additional Contributors:</label></div>
              </div>
              <div class="input-wrapper">
                <table class="bordered">
                  <tbody>
                    <tr>
                      <td>Holt Skinner</td>
                      <td>Grant funder</td>
                      <td>Individual</td>
                      <td>cshyu@wikimedia.org</td>
                    </tr>
                    <tr>
                      <td>Justin Hofer</td>
                      <td>Primary Investigator</td>
                      <td>Government</td>
                      <td>jh773@missouri.gov</td>
                    </tr>
                    <tr>
                      <td>Ali Raza</td>
                      <td>Other</td>
                      <td>Individual</td>
                      <td>aar456@missouri.gov</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--
              <div class="input-wrapper">
                <div class="row"><span class="edit-span"><input class="edit-input edit-field" value="Holt Skinner" readonly/></span></div>
                <div class="row"><span class="edit-span"><input class="edit-input edit-field" value="Justin Hofer" readonly/></span></div>
                <div class="row"><span class="edit-span"><input class="edit-input edit-field" value="Ali Raza" readonly/></span></div>
                <div class="row"><span class="edit-span"><input class="edit-input edit-field" value="Brad Rogers" readonly/></span></div>
              </div>
              -->
            </div>
            <ul class="users-list"></ul>
          </form>
        </div>
      </div>
    </main>
    <?php include 'footer.php' ?>
  </body>
</html>
