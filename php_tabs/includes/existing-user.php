<div id="loginOverlayEmail" class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-10" style="display: block;">
</div>
<div id="loginModalEmail"
  class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#d0d9e7] p-6 shadow-lg rounded-lg z-20"
  style="display: block;">
  <div class="flex justify-between">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Existing User</h2>
    <form action="query/view-or-another.php" method="post">
      <button type="submit" name="close-exist"
        class="close cursor-pointer absolute top-5 right-5 text-3xl text-gray-500 hover:text-gray-700">&times;</button>
    </form>
  </div>
  <hr class="w-full m-auto border mb-3">
    <label class="">It looks like this account has already taken the test!</label>
    <br>
    <div class="flex justify-center items-center">
      <form action="query/view-or-another.php" method="POST">
        <button type="submit" name="view-result"
          class="hover:border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl hover:bg-[#febd5b] bg-[#5495C9] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out block dark:hidden">View Result
        </button>
        <button type="submit" name="view-result"
          class="border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#002951] transition duration-300 ease-in-out hidden dark:block">View Result
        </button>
        <button type="submit" name="another-resp"
          class="hover:border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl hover:bg-[#febd5b] bg-[#5495C9] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out block dark:hidden">Submit Another Response
        </button>
        <button type="submit" name="another-resp"
          class="border-[#876128] border-2 py-2 px-10 shadow-md tracking-wider rounded-2xl bg-[#febd5b] hover:bg-[#5495C9] font-semibold hover:text-white hover:border-[#2e5679] text-[#002951] transition duration-300 ease-in-out hidden dark:block">Submit Another Response
        </button>
      </form>
    </div>
</div>
