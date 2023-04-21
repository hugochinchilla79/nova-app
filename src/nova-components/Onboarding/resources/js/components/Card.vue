<template>
  <div>
    <VOnboardingWrapper ref="wrapper" :steps="steps" />
  </div>
</template>
<script>
import { defineComponent, ref } from 'vue'
import { VOnboardingWrapper, useVOnboarding } from 'v-onboarding'
import 'v-onboarding/dist/style.css'
export default defineComponent ({
  components: {
    VOnboardingWrapper
  },
  setup() {
    let novaElement = document.getElementById('nova');
    let sidebarElement = document.getElementsByClassName('sidebar-item');
    novaElement.setAttribute('element', 'nova');
    console.log(novaElement);
    console.log(sidebarElement);

    for(var i in sidebarElement) {
      if(sidebarElement[i].getAttribute) {
        sidebarElement[i].setAttribute('id', 'step1');
        sidebarElement[i].setAttribute('ref', 'step1');
      }
    }



    const wrapper = ref(null)
    const { start, goToStep, finish } = useVOnboarding(wrapper)
    const steps = [
      {
        attachTo: { element: '#step1' },
        content: { title: "Welcome!" }
      },
      {
        attachTo: { element: '#bar' },
        content: {
          title: "Do it!",
          description: "This is a description field and I really don't know what to write here..."
        }
      }
    ]

    return {
      wrapper,
      steps,
      start,
      finish,
      goToStep
    }
  },
  beforeMount() {

  },
  onMount(){
    this.$refs.wrapper.start();
  }
})


</script>

<style>

</style>