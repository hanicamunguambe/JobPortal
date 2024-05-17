<x-layout>
  <div class="space-y-10">

    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Let's Find Your New Job</h1>
        <form action="" class="mt-6">
            <input type="text" placeholder="Web Developer.." class=" rounded-xl border-white/10 bg-white/5 px-5 py-4 w-full max-w-xl">
        </form>
    </section>
     <section class="pt-10">
          <x-section-header>Feature Jobs</x-section-header>

          <div class="grid lg:grid-cols-3 gap-8 mt-6">
              <x-job-card></x-job-card>
              <x-job-card></x-job-card>
              <x-job-card></x-job-card>
          </div>
     </section>

       <section>
           <x-section-header>Tags</x-section-header>
           <div class="mt-6 space-x-1">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
      </section>

      <section>
           <x-section-header>Recent Jobs</x-section-header>
           <div class="mt-6 space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
           </div>
      </section>
  </div>
</x-layout>
