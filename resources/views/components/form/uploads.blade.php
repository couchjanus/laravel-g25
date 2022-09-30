@props(['name', 'value'])
<div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
  <div class="space-y-1 text-center" x-data="showImage()">
    <div class="flex-1 flex-wrap">
      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <div id="preview">

      </div>

    </div>
    <div class="flex text-sm text-gray-600">
      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
        <span>Upload files</span>
        <input id="file-upload" name="{{$name}}" multiple type="file" class="sr-only" @change="showPreview(event)">
      </label>
      <p class="pl-1">or drag and drop file here</p>
    </div>
    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
  </div>
</div>
<script>

        function showImage() {
            var preview = document.getElementById("preview");
            return {
                showPreview(event) {
                    if (event.target.files.length > 0) {
                      for (i=0; i<event.target.files.length; i++) {
                        var img = document.createElement("img");
                        var src = URL.createObjectURL(event.target.files[i]);
                        img.className = "object-cover h-32 mt-2 w-60 text-center";
                        img.src = src;
                        preview.append(img);
                      }
                      preview.style.display = "flex";
                    }
                }
            }
        }
</script>
