<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Não é a linguagem de programação que define o programador, mas sim sua lógica."
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            Sobre mim
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            Sou um programador com pouco mais de dois anos de estudo em programação web<br />
             Sou dedicado em estudar e aprender continuamente, sempre buscando resolver problemas com o uso da programação web <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            Atualmente, tenho me concentrado em aprimorar minhas habilidades em
            <span class="text-amber-500 font-bold">JavaScript</span> e <span class="text-amber-500 font-bold">Php</span>,
            mas estou aberto a aprender outras tecnologias relevantes no desenvolvimento web.

          </p>
        </div>
      </div>
    </div>
  </div>
</section>
