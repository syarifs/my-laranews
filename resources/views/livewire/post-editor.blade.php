<form method="post" wire:submit.prevent="store">
  <h1 class="px-6 py-4 text-2xl uppercase">New Post</h1>
  <div class="grid">
     <div class="py-5 px-3 grid-cols-1">
      <x-label for="title">Title</x-label>
      <x-input id="title" wire:model="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
    </div>
    <div class="py-5 px-3 grid-cols-2">
      <x-label for="image">Image</x-label>
      <x-input id="title" wire:model="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" required autofocus /> 
    </div>
  </div>
  <div class="py-5 px-3">
  <x-label for="content">Content</x-label>
    <textarea wire:model="post" id="content"></textarea>
  </div>
  <input type="submit" value="Submit" class="px-4 py-3 w-full bg-blue-500 text-white hover:bg-blue-700 ease-in-out duration-500">
</form>

<script src="https://cdn.tiny.cloud/1/vxdny9qedv1p6376zc01hmb62omyqlln0f508l2rtmiwfd1e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
  selector: 'textarea#content'
});
</script>
