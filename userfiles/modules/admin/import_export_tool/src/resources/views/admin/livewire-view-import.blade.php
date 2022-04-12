<div class="row">
    <div class="col-md-8">
        <div class="card mt-2">
            <div class="card-header">
                Main settings
            </div>
            <div class="card-body">

                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td><label for="feed_url"><b>XML link</b></label><br><small>Link to XML
                                file</small></td>
                        <td>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="feed_data[xml_url]"
                                       id="feed_url" placeholder="https://site.com/feed.xml">
                                <div class="input-group-append">
                                    <input type="button" class="btn btn-primary" id="download_xml"
                                           value="Download">
                                </div>
                            </div>
                            <span id="xml_url_result" class="icon-result-success"></span>
                            <span id="xml_url_result_text">Last downloaded: 31.03.2022 08:51:04</span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="feed_download_image_1"><b>Download images</b></label><br><small>Download
                                and check images</small></td>
                        <td>
                            <input type="radio" name="feed_data[download_image]"
                                   id="feed_download_image_1" value="1" checked="checked"> <label
                                for="feed_download_image_1">Yes</label>
                            <input type="radio" name="feed_data[download_image]"
                                   id="feed_download_image_0" value="0"> <label
                                for="feed_download_image_0">No</label>

                        </td>
                    </tr>
                    <tr>
                        <td><label for="feed_parts"><b>Import parts</b></label><br><small>Split
                                importing</small></td>
                        <td>
                            <select class="form-control" name="feed_data[parts]" id="feed_parts"
                                    onchange="chageCronLinks(this.value);">
                                <option value="1" selected="selected">1 part(s)</option>
                                ';
                                <option value="2">2 part(s)</option>
                                ';
                                <option value="3">3 part(s)</option>
                                ';
                                <option value="4">4 part(s)</option>
                                ';
                                <option value="5">5 part(s)</option>
                                ';
                                <option value="6">6 part(s)</option>
                                ';
                                <option value="7">7 part(s)</option>
                                ';
                                <option value="8">8 part(s)</option>
                                ';
                                <option value="9">9 part(s)</option>
                                ';
                                <option value="10">10 part(s)</option>
                                ';
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td><label for="feed_content_tag"><b>Content tag</b></label><br><small>Repeat
                                content tag with elements</small></td>
                        <td>
                            <select class="form-control" name="feed_data[product_tag]"
                                    id="feed_content_tag">
                                <option value="rss">rss</option>
                                <option value="rss;channel;title">rss &gt; channel &gt; title</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td><label for="feed_primary_key"><b>Primary key</b></label><br><small>Unique
                                Content ID or Content Model</small></td>
                        <td>
                            <select class="form-control" name="feed_data[primary_key]"
                                    id="feed_primary_key">
                                <option value="content_id" selected="selected">Content ID</option>
                                <option value="model">Content model</option>
                                <option value="sku">SKU</option>
                            </select>

                        </td>
                    </tr>


                    <tr>
                        <td><label for="feed_data_old_content_action"><b>Old
                                    content</b></label><br><small>Content which are in your site but not
                                in xml anymore</small></td>
                        <td>
                            <select class="form-control" name="feed_data[old_content_action]"
                                    id="feed_data_old_content_action">
                                <option value="nothing" selected="selected">Do nothing</option>
                                <option value="delete">Delete</option>
                                <option value="invisible">Invisible</option>
                            </select>

                        </td>
                    </tr>


                    <tr>
                        <td><label for="feed_data_update-content_name"><b>Update</b></label><br><small>Select
                                what will be changed in update</small></td>
                        <td>
                            <div id="update-items" class="well well-sm"
                                 style="height: 130px; overflow: auto;">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="feed_data[update_items][]"
                                           value="description" id="feed_data_update-description"
                                           checked="checked">
                                    <label for="feed_data_update-description" class="form-check-label">Description</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="feed_data[update_items][]"
                                           value="category" id="feed_data_update-category"
                                           checked="checked">
                                    <label for="feed_data_update-category" class="form-check-label">Category</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="feed_data[update_items][]"
                                           value="image" id="feed_data_update-image" checked="checked">
                                    <label for="feed_data_update-image" class="form-check-label">Images</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="feed_data[update_items][]"
                                           value="visible" id="feed_data_update-visible"
                                           checked="checked">
                                    <label for="feed_data_update-visible" class="form-check-label">Visibility</label>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="feed_delete"><b>Delete feed</b></label><br>
                            <small>
                                Remove this xml setting
                            </small>
                        </td>
                        <td>
                            <a href=""
                               id="delete-import-link" class="btn btn-small btn-danger"
                               onclick="return confirm('Are you sure to delete this import feed ?');">Delete
                                this import</a>
                            <br />

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="delete-import-products" value="1"
                                       onclick="switchDeleteLink($(this).prop('checked'));">
                                <label class="form-check-label" for="delete-import-products"> Delete products from this
                                    import</label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mt-2">
            <div class="card-header">
                Information
            </div>
            <div class="card-body">
                <div id="xml-import-info">
                    <table class="table table-condensed">
                        <tbody>
                        <tr>
                            <td class="name">Total running</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="name">XML size</td>
                            <td>0.00 MB</td>
                        </tr>
                        <tr>
                            <td class="name">Content in XML</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td class="name">Last import time</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="name">Last import start</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="name">Last import end</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>