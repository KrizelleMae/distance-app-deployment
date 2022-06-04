<div id="modal-application" class="uk-modal-container text-gray-600" uk-modal>
  <div class="uk-modal-dialog ">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="uk-modal-header">
      <p class="uk-modal-title">John Doe</p>
      <small>Masters in Education</small>
    </div>
    <div class="uk-modal-body">
      <div class="container mx-auto">
        <div class="mt-3"></div>
        <?php include './components/modal-acc.php'; ?>

        <div class="mt-16 float-right">
          <button
            class="py-2 px-4 rounded border border-red-800 text-red-800 font-bold uk-modal-close hover:bg-red-200 mr-3"
          >
            Cancel
          </button>
          <button
            class="py-2 px-4 border border-green-600 rounded bg-green-600 text-white"
          >
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
