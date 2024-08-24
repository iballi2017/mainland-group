class FileUpload {
    constructor() {
    }

    set_file_name_for_ui(uploadedFileNameOutput, $event) {
        uploadedFileNameOutput && uploadedFileNameOutput.classList.contains('hidden') ? uploadedFileNameOutput.classList.remove('hidden') : null;
        uploadedFileNameOutput ? uploadedFileNameOutput.innerHTML = $event.target.files[0].name : null;
    }
}


export default FileUpload;