<form wire:submit.prevent="save"
      class="bg-white dark:bg-gray-800 border rounded-md border-gray-100 dark:border-gray-700 px-4 py-2 flex items-center gap-2 h-fit">
    <div class="w-full h-fit flex align-middle">
    <x-textarea-input wire:model="content" :maxLenght="255" id="content" placeholder="{{ __('Ask a question...') }}" class="w-full" type="text" name="content" required autofocus/>
    </div>
    <x-primary-button style="margin-top: 0" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
            <path
                d="M3.105 2.288a.75.75 0 0 0-.826.95l1.414 4.926A1.5 1.5 0 0 0 5.135 9.25h6.115a.75.75 0 0 1 0 1.5H5.135a1.5 1.5 0 0 0-1.442 1.086l-1.414 4.926a.75.75 0 0 0 .826.95 28.897 28.897 0 0 0 15.293-7.155.75.75 0 0 0 0-1.114A28.897 28.897 0 0 0 3.105 2.288Z"/>
        </svg>
    </x-primary-button>
</form>
