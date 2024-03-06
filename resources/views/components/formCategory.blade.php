<div class="text-center">
    <div>
        <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="formHidden" style="display: none;">
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <form action="" method="POST">
                    <div class="mb-4">
                        <span onclick="hidePopupEdit()" class="float-right cursor-pointer">&times;</span>
                        <h2 class="text-2xl font-bold">Modify Category</h2>
                    </div>
                    <input id="id2" type="hidden" name="idTag" value="">
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="tagName2" name="newTagName" value="" class="mt-1 p-2 border border-gray-300 rounded-md">
                    <button type="submit" name="modifyTag" class="mt-4 inline-flex bg-indigo-900 items-center px-4 py-2 hover:bg-gray-600 text-white text-sm font-medium rounded-md">
                        modify
                    </button>
                </form>
            </div>
        </div>
    </div>

<div class="text-center">
    <div>
        <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="formHidden1" style="display: none;">
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <form action="" method="POST">
                    <div class="mb-4">
                        <span onclick="hidePopup()" class="float-right cursor-pointer">&times;</span>
                        <h2 class="text-2xl font-bold">add new Category</h2>
                    </div>
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="tagName2" name="newTagName" value="" class="mt-1 p-2 border border-gray-300 rounded-md">
                    <button type="submit" name="modifyTag" class="mt-4 inline-flex bg-indigo-900 items-center px-4 py-2 hover:bg-gray-600 text-white text-sm font-medium rounded-md">
                        create
                    </button>
                </form>
            </div>
        </div>
    </div>
