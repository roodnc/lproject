<script>
import Slider from '@jeremyhamm/vue-slider'
export default {
         props: ['userId'],
  components: {
    'slider': Slider
    
  }
}
</script>

<template>





 <slider :width="300" margin-right= "300px" format="push" direction="left" :opacity="0.15" 
 :links="[{'id': 1, 'text': 'Upload a Post', 'url': 'http://127.0.0.1:8000/p/create'}, {'id': 2, 'text': '/profile/this.userId/edit', 'url': 'http://127.0.0.1:8000/profile/this.userId/edit'}]"></slider>
</template>