<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile Condition
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Condition</sch:title>
    <sch:rule context="f:Condition">
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Condition</sch:title>
    <sch:rule context="f:Condition">
      <sch:assert test="exists(f:clinicalStatus)=(f:verificationStatus/@value!='entered-in-error')">Condition.clinicalStatus SHALL be present if verificationStatus is not entered-in-error. Condition.clinicalStatus SHALL NOT be present if verification Status is entered-in-error</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Condition.stage</sch:title>
    <sch:rule context="f:Condition/f:stage">
      <sch:assert test="exists(f:summary) or exists(f:assessment)">Stage SHALL have summary or assessment (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Condition.evidence</sch:title>
    <sch:rule context="f:Condition/f:evidence">
      <sch:assert test="exists(f:code) or exists(f:detail)">evidence SHALL have code or details (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
