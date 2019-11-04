---
layout: page
title: FHIR Community Process
---

Welcome to the FHIR Community Process Home Page. The following Organizations participate in the FHIR Community Process:

* [HL7](http://hl7.org)

# Summary

The '''FHIR Community Process''' (FCP) describes a common process where Participant Organizations - who wish to adapt HL7<sup>®</sup> FHIR<sup>®</sup> for specific use cases - work with different parts of the overall FHIR Community to create sub-communities that work together to solve particular interoperability problems using FHIR. The usual end-product of this process is one or more published FHIR implementation guides that are usually subject to ongoing maintenance.

A variety of organizations, including but not limited to Standards Development Organizations, publish FHIR specifications, each that can represent a different set of stakeholders and approaches. Almost all of those organizations have overlaps in membership and stakeholder communities, yet bring their own value proposition. The FHIR Community Process provides a set of guidelines to be followed by any kind of community to use FHIR to address their business challenges. Organizations choose to follow the FCP in order to produce output that works with what the rest of the community is producing, and has better acceptance and uptake by the community.

The goals of the FHIR Community Process are:

* ensure a consistent overall approach for the community to deal with
* allow for a variety of approaches to developing FHIR sub-communities (reflecting a variety of needs)
* minimize incompatibilities in outputs and processes between the different projects (which naturally have overlapping and diverging aspects)

Organizations that attest to following the FCP may label their marketing material, specifications, and other documentation with the "FHIR Community Process" icon (see above). Note that any organizations may develop and publish FHIR specifications without following this process, but they cannot use the FHIR Community Process icon as a stamp of approval. 

Note that there may still be competition between organizations as they vie to represent a given community. Such competition may be both good and bad for the community - good, in that it helps keep the community honest, and bad, where the same problem may be solved with incompatible specifications (and wastes time and effort by undesirable redundancy).  It is hoped that these guidelines and establishment of an FCP Coordinating Committee may reduce unnecessary duplication of effort in the FHIR community and incompatible rules in FHIR IGs.

The FCP complements the HL7 Implementation Support Strategy which covers the entire pantheon of HL7 Standards.

# HL7 and FCP relationship

HL7, which developed and maintains the FHIR specification, plays several important roles in this community: 

* Provides the organizational umbrella, and is the governance authority for, the FCP
* Provides and maintains the FHIR Platform (the specification, the supporting tooling, and the community around both) and supports the FHIR Product Director
* Defines the rules of the FCP
* Also acts as a FCP Participant along with many other organizations; and
* Owns and protects the FHIR trademarks.

When acting as a FCP Participant HL7 operates on a common level with other FCP community members. Note that as an open membership organization, HL7 processes in this regard are necessarily open and transparent. 

## HL7 International Affiliate

The HL7 Affiliates are also candidates for FCP Participants, and should sign up to participate in the FCP Participant. Note that due to the very flexible arrangements between HL7 and the affiliates, there is no common process for affiliates to follow, and each Affiliate would need  to choose to be a FCP Participant individually. 

Affiliates that are participants of the FCP would lead a jurisdictional based sub-committee of the coordination committee that provides specific comment on the suitability of projects within their jurisdiction, and/or the collaborations that should be followed within their domain.

# FCP Participants

In keeping with the open principles of HL7 FHIR, any entity who is intending to produce publicly available FHIR Implementation Guidance is able to join the FCP.  

It is encouraged (but not required) that entities who wish to actively participate in the FCP are also HL7 Members (either of HL7 International, or of an HL7 Affiliate) - this helps support the ongoing development of the FHIR standard and creates better relationships within the community that manages FHIR and the tools that support it. 

Candidates are identified as organizations that have at least some of their activities already following the FCP, and whose efforts are likely to  lead to publications marked and marketed as FCP Specifications (note that most FCP participants also have other activities that are not part of the FCP.)

# FCP Coordination Committee

The FCP Coordination Committee is a group whose membership consists of representatives from all FCP Participants with formal commitments to the FCP. The role of the committee is to act as a clearing house for the FCP process - all new FCP projects are proposed to the committee for review, to ensure that all FCP Participants are informed about what work is taking place. The coordination committee does not have veto rights over any particular FCP Participant project, but FCP Participants commit to doing their best to minimise overlaps. 

Further (draft) details about the proposed FCP Coordination Committee:

* Co-chair: HL7 FHIR Implementation Director (currently Graheme Grieve)
* Co-chair: Chosen by the Committee from amongst it's membership
* HL7 provides a single member of the Coordination Committee on an ex-officio basis
* All deliberations are open to the public (minutes, proposals, discussions etc. on publicly available web resources).
* Only FCP Participant representatives can take part directly
* Committee maintains its own processes to describe how proposals are submitted and reviewed, etc.
* An additional role of the committee leadership is to maintain outreach to key community bodies such as GDHP (https://www.gdhp.org/)* and to maintain a web site where participants are listed and approved projects are published

Note that the Coordination Committee will (and should) have overlapping membership with existing coordination committees such as Gemini (between HL7 and IHE) and others which perform other additional roles as members of the broader FHIR community.

The FCP Coordination committee has jurisdictional sub-committees that have the same purpose and use the same infrastructure, but are focused on specific jurisdictions. Typically - but not always - this is at the country level, and associated with an HL7 affiliate. Members of the subcommittee are any FCP participants with a specific interest in the jurisdiction (may be sub-part of the main FCP participant). Leadership of these committees is as agreed between the main coordination committee, and HL7 and the affiliate(s).

## FHIR Publication Tooling Council

FCP participants also have the right to delegate a member to sit on the FHIR Publication Tooling Council. The Council is a task force of the HL7 FMG committee, and is the deliberative body that discusses and approves changes to:

* The [FHIR IG publishing Requirements](https://wiki.hl7.org/FHIR_Implementation_Guide_Publishing_Requirements)
* Functional requirements for the HL7 IG Publisher Tool
* Functional requirements for the Standard HL7 and FCP IG templates

The Tooling Council also includes tooling vendors and other members as chosen by the FMG. 

# New Projects

New projects may be brought forward by any entity (individual, company, government agency, NGO) whether they are a FCP Participant or not. Typically, candidate projects are identified and brought forward to whichever FCP Participant is nearest, whether or not it is the most appropriate. FCP Participants should maintain active outreach with the community around them to ensure early discovery of potential projects. Once a candidate project is identified, the appropriate FCP Participants bring it to the FCP Coordination Committee.

## Project Proposals

Project proposals made to the FCP Participant include information such as:

* project description
* realm or jurisdiction
* proposed licensing arrangements  Open source licenses such as [Creative Commons Public Domain](https://creativecommons.org/publicdomain/zero/1.0/) are preferred but not required
* identified dependencies, overlaps, and other related projects
* long-term maintenance plan (see below)
* any identified security, safety and privacy/consent implications (must be specifically called out)
* The Applicable Project management documentation (see below).

# Project Development

Once a project is announced, development begins. The following rules apply to FCP Projects: 

1. the license and IP contribution requirements must be clearly documented. Open source licenses such as [Creative Commons Public Domain](https://creativecommons.org/publicdomain/zero/1.0/) are preferred but not required
1. there must be a way for anyone to comment, and contribute IP to the project
1. Input into the issue resolution, formal ballot and work prioritization decision and project leadership may be restricted to a sub-community based on FCP Participant policy or membership (or government obligations). Such rules must be clearly documented
1. Community engagement strategies must be clearly documented (e.g. meetings, teleconferences/webexs, wikis, email lists, chat lines etc), and in particular, how to be notified of significant project events must be documented
1. how the community support (particularly the secretariat) is provided and funded must be clearly documented
1. potential conflict of interests must be made public to the community
1. The project development cycle should follow these general steps and must be clearly and concisely documented

  * development of scope and intent
  * recruitment of interested parties (marketing - FCP Participants undertake to help each other in this process)
  * repeated cycles of 
    * publishing draft specifications
    * open community discussion
    * testing the specification at community events
  * those repeated cycles gradually fill out the details and help make the community agreements become more robust
  * (optional) formal review cycle (or ballot) - last call for comment
  * publication of milestone release - usually, a FHIR implementation Guide, but other outputs are possible if they better capture the community agreements
  * restart the process for maintenance updates or other related projects.

## Project Documentation

FCP Participants must publish a documented policy that describes how their development process is governed, and shows how the numbered requirements in this section are met. 

Notes:

* Many (most) FCP participants have their own existing policies and procedures they must follow - in this case, their policies are considered implementations of the FCP requirements. 
  * In such cases, their FCP Project documentation will be a short web page that maps from the requirements in this section to existing organizational documentation.
* Most FCP participants will publish a single document that covers all their FCP projects, but this is not required.
* ANSI Accredited standards organisations such as HL7 are automatically compliant with most of these requirements, which are less stringent than ANSI, but there are also additional requirements in the FCP process that likely need to be confirmed.

## Project Transfer

Projects may be transferred between FCP Participant members (or shared amongst them). This might be done because 

* a project is growing beyond the capacity of the initiating FCP Participant to provision support for it,
* a project initiated at a national level proves to have strong international interest
* the project has entered a different stage of it's natural life cycle, and a different FCP Participant is appropriate (e.g. HL7 or the FHIR Foundation might be the FCP Participant of last resort for long term maintenance)

Nothing about the FCP process requires such transfer to occur, but projects following the FCP process are much more ready to transfer between FCP Participants, and the FCP process may make the advantages of such a transfer more obvious. Some FCP Participants already have joint management or transition arrangements in place.

## Project Output

Most FCP projects produce FHIR implementation guides as their primary output, which capture the agreements made by the community that participates in the project. Other possible outputs include ISO standards, wiki documentation, or working software. Each FCP project must have clearly documented expectations regarding what the outputs are (note that these may change over time, but the FCP participant must ensure that the community is consulted when they do and explain how such outreach is achieved). 

When the project produces Implementation Guides, the Implementation Guide should have the FCP Icon somewhere on the home page. In addition, the Implementation Guide must conform to the rules documented for [FHIR IG publishing Requirements](https://wiki.hl7.org/FHIR_Implementation_Guide_Publishing_Requirements). Note that HL7 provides tooling to produce implementation guides that meet these requirements, but the project is not required to use the tooling. Additional rules for FCP IGs:

* The license must be clearly documented in the IG. If other encumbrances exist, these must be documented as well
* Any FHIR IGs or other implementation collateral must be registered in the FHIR registry
* The FCP version release strategy must be followed (see below)
* How to raise issues against the IG must be clearly documented
* Security / safety / privacy issues must be documented explicitly, and how to report problems related to these subjects must be clearly documented, with a rapid response to these issues provisioned
* The IGs should be published at their canonical URL (or linked to from there).

### FCP Version Release Strategy

All formal releases must have a version identifier associated with the release, and this version identifier should be set in all the conformance resources included in the guide. 

Version identifiers should not be re-used, and must have the format major.minor.patch (this is an NPM package rule). Versions must be serially incrementing. Consumers of the specification must be safe to assume that a change in patch number does not represent any intentional change to software in order to conform to the specification (note, though, that technical corrections always change something, that is why they are made). 

The following version strategy, related to semver ([Semantic Versioning](https://semver.org/)), is recommended, but variations that are consistent with NPM versioning are allowed (e.g. direct semver)

The versioning strategy is a variant of semver as followed by HL7. Each version has 3 numerical parts:

* Publication: the major publication number (e.g. the 1st milestone release is 1.0.0)
* Release: the sequence of this milestone within the Publication cycle
* Patch: incremented when technical corrections to an existing published milestone are made

Note that in this versioning strategy, 1.0.0 is the first full milestone release. Subsequent versions published as part of balloting / consultation will have versions like 1.2.0, until a full 2 release of 2.0.0. 

## Ongoing Maintenance

FCP Participants are responsible for providing ongoing maintenance of their projects and published IGs. If FCP Participants close projects, or if the FCP Participant itself ceases operations or ceases to act as a FCP Participant, it is expected to make arrangements internally or with other FCP Participants to take over management of the project and/or its outputs (e.g. through public source repository, escrow or other mechanisms).

## Current and Archive Versions

FCP Participants are responsible for ensuring that details of their current products are published to their [FHIR publication feed](?), and that as products are superseded a history of prior version is maintained as part of their publication pack (follow HL7 requirements detailed in [FHIR IG publishing Requirements](https://wiki.hl7.org/FHIR_Implementation_Guide_Publishing_Requirements)). 

# FHIR Accelerator Program

Potential FCP participants may not be in a position to meet all the requirements of the FHIR Community Process, or may wish to have a closer relationship to HL7 than is needed to be a FCP participant. HL7 offers the [FHIR Accelerator program](https://wiki.hl7.org/FHIR_Accelerator_program) to help such partners through the process of developing FHIR IGs using the HL7 processes. While participation in the FHIR Accelerator program is not required to be a participant in the FHIR Community Process, entities may wish to use the FHIR Accelerator Program as a springboard into the FHIR Community Process.
