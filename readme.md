# Markdown++

This is a simple learning lib. In this repo I am recreating markdown but with the ability to add CSS classes and the like to markdown

Initial idea is something like

```
##={.lead} Hi
```

Would output something like

```
<h2 class="lead">Hi</h2>
```

## ideas

Code scans doc, finds ```#``` and then replaces it with the h1 before and creates a /h1 after. 

first iteration. Set up ability to create the header

Second iteration. Locate additional class requirement and transform that
