gsap.registerPlugin(ScrollTrigger);

let tl = gsap.timeline({  
  scrollTrigger:{
  trigger: ".tree",
  start: "bottom center ",
  end: "bottom top",
  scrub: 2,
}})
tl.fromTo(".circle", {
  width: "35em",
  height: "35em",
  borderRadius: "35em",
  duration: 1,
},
{
  width: "100%",
  height: "100vh",
  borderRadius: "0em"
})

let tl1 = gsap.timeline({  
  scrollTrigger:{
  trigger: ".circle",
  start: "top center ",
  end: "top 35%",
  scrub: 1,
}})
tl1.fromTo(".explication", {
  fontSize: "1px",
  color: "#fffafb05",
  duration: 1,
},
{
  fontSize: "75px",
  color: "#fffafb",
  duration: 1,
})

gsap.to(".pbaseline1", {
  y:200,
  duration: 1,
  scrollTrigger:{
    trigger: ".one",
    start: "-180px top",
    end: "bottom top",
    scrub: 0.8,
  }
})

gsap.to(".pbaseline2", {
  y:200,
  duration: 1,
  scrollTrigger:{
    trigger: ".two",
    start: "-180px top",
    end: "bottom top",
    scrub: 0.8,
  }
})

gsap.to(".pbaseline3", {
  y:200,
  duration: 1,
  scrollTrigger:{
    trigger: ".tree",
    start: "-185px top",
    end: "bottom top",
    scrub: 0.8,
  }
})
