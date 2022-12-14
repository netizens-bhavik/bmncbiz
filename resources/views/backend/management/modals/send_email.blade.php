<div class="modal fade" id="mail_project_modal" tabindex="-1" role="dialog"
     aria-labelledby="mail_project_modalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Send Mail Details</h5>
                <button type="button" class="close-modal btn btn-gradient-primary btn-rounded btn-icon"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="mail_project_modal_form" id="mail_project_modal_from" method="POST">
                    <input type="hidden" name="client_id" value="" id="mail_client_id"/>
                    <input type="hidden" name="client_project_id" value=""
                           id="mail_client_project_id"/>
                    <div class="form-group row">
                        <label for="mail_client_name-label" class="col-sm-3 col-form-label">Client
                            Name</label>
                        <div class="col-sm-9">
                            <label id="mail_client_name_label" placeholder="Client Name"
                                   class="col-sm-12 col-form-label"></label>
                            <input id="mail_client_name" type="hidden" name="client_name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mail_client_email-label" class="col-sm-3 col-form-label">Client
                            Email</label>
                        <div class="col-sm-9">
                            <label id="mail_client_email_label" class="col-sm-12 col-form-label"></label>
                            <input id="mail_client_email" type="hidden" name="client_email" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mail_client_project_name-label" class="col-sm-3 col-form-label">Project
                            Name</label>
                        <div class="col-sm-9">
                            <label id="mail_client_project_name_label"
                                   class="col-sm-12 col-form-label"></label>
                            <input id="mail_client_project_name" type="hidden" name="project_name"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mail_client_project_mail_subject-label"
                               class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input id="mail_client_project_mail_subject" type="text" name="subject"
                                   placeholder="Subject" class="form-control" value="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mail_client_project_mail_cc-label"
                               class="col-sm-3 col-form-label">CC</label>
                        <div class="col-sm-9">
                            <input id="mail_client_project_mail_cc" type="email" name="cc"
                                   class="form-control" placeholder="CC" value="">
                            <span style="font-size: 12px">Separate multiple emails with comma</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mail_client_project_mail_bcc-label"
                               class="col-sm-3 col-form-label">BCC</label>
                        <div class="col-sm-9">
                            <input id="mail_client_project_mail_bcc" class="form-control" type="email"
                                   name="bcc" placeholder="BCC" value="">
                            <span style="font-size: 12px">Separate multiple emails with comma</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mail_client_project_mail_body-label">Report Image</label>
                        <input type="file" class="form-control" id="mail_client_project_mail_email_image"
                               name="email_img" placeholder="files" value=""
                               accept=".jpg,.png,.gif,.jpeg">
                    </div>

                    <div class="form-group row">
                        <label for="mail_client_project_mail_body-label" class="col-sm-3 col-form-label">Mail
                            Body</label>
                        <div class="col-sm-9">
                                        <textarea id="mail_client_project_mail_body" class="form-control" type="text"
                                                  name="body"
                                                  placeholder="Mail Body" rows="5" value=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail_client_project_mail_body_label">Attachment</label>
                        <input type="file" class="form-control" id="mail_client_project_mail_attachment"
                               name="attachments[]" placeholder="files" value="" multiple="multiple"
                               accept=".jpg,.png,.gif,.jpeg,.pdf,.docs,.docx,.mp4,.mp3,.wav,.xls,.xlsx,.pptx">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-modal"
                                data-dismiss="modal">Close
                        </button>
                        <button type="Submit" class="btn btn-primary" id="edit_project_modal_submit">Save
                            changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
