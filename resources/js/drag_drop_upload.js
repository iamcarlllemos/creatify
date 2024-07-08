function drag_drop_upload(elem) {
    const dropzone = $(elem);
    dropzone.ondragover = (e) => {
        e.preventDefault();
        [...e.dataTransfer.items].forEach((item) => {
            if(typeValidation(item.type)){
                dropArea.classList.add('drag-over-effect')
            }
        })
    }
}

export {
    drag_drop_upload
}