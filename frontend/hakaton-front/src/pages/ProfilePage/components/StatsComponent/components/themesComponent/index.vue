<template>
  <div class="theme-progress">
    <div class="theme-progress--next">
      <p class="theme-progress--title">Следующая тема</p>
      <Accordion>
        <AccordionTab :header="theme?.title">
          {{ theme?.description }}
        </AccordionTab>
      </Accordion>
    </div>
    <div class="theme-progress--last">
      <p class="theme-progress--title">Последняя тема</p>
      <Accordion>
        <AccordionTab header="Название темы"> Content </AccordionTab>
      </Accordion>
    </div>
  </div>
</template>

<script>
export default {
  name: "ThemesComponent",
  props: {
    theme: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.theme-progress {
  display: flex;
  flex-direction: column;
  width: 335px;
  gap: 20px;
  &--next {
  }
  &--last {
  }
  &--title {
    font-family: "GT Eesti Text LC", sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 16px;
    color: #1e1e1e;
    margin-bottom: 8px;
  }
}
</style>
